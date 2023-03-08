<?php

namespace App\Http\Controllers\Auth;

use App\Events\ConfirmRegister;
use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Models\Role;
use App\Models\User;
use App\Models\UserVerify;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class RegisterController extends Controller
{

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('auth.register', [
            'name' => old('name'),
            'email' => old('email'),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param   \App\Http\Requests\RegisterRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RegisterRequest $request)
    {
        DB::beginTransaction();
        try {
            $user = $this->__createUser($request);

            $token = $this->__createToken($user);

            $data = $this->__prepareData($request, $token);

            $this->__sendVerificationEmail($data);

            DB::commit();

            return view('email.email-verification-email', compact('data'));

        } catch (\Exception $e) {
            DB::rollBack();
            report($e);
            return redirect()->back()->with('errors', _tr('alert.process_failed'));
        }
    }

    protected function __createUser($request)
    {
        return User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role_id' => Role::IS_USER,
        ]);
    }

    protected function __createToken($user)
    {
        return Str::random(64);
    }

    protected function __prepareData($request, $token)
    {
        return [
            'token' => $token,
            'name' => $request->name,
            'email' => $request->email,
        ];
    }

    protected function __sendVerificationEmail($data)
    {
        event(new ConfirmRegister($data));
    }

    public function verifyAccount($token){
        $userVerify = UserVerify::where('token', $token)->first();
        if($userVerify){
            $this->__verifyUser($userVerify);
        }else{
            abort(404);
        }
    }

    public function __verifyUser($userVerify){
        $user = $userVerify->user;

        if($user->is_email_verified == INACTIVE){
            $this->__verifyUserExpire($userVerify, $user);
        }else{
            return redirect('/login')->with('alreadyVerifiedNeedLogin','You are already verified, please login');
        }
    }

    public function __verifyUserExpire($userVerify, $user){
        $timeExpired = $userVerify->created_at->diffInMinutes(now());
        if($timeExpired > 1){
            $userVerify->user->delete();
            $userVerify->delete();
            return redirect('/register')->with('tokenExpired','Token expired, please register again');
        }
        $user->is_email_verified = ACTIVE;
        $user->save();
        Auth::login($user);
        return redirect(RouteServiceProvider::HOME);
    }
}
