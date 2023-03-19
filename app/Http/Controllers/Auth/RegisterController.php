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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RegisterRequest $request)
    {
        DB::beginTransaction();
        try {
            $user = $this->__createUser($request);

           //Create Token for verify account
            $token  = Str::random(64);

            //Create Auth Token for API
            $apiToken  = $user->createToken('api_token')->plainTextToken;

            $data = $this->__prepareData($request, $token);

            $this->__sendVerificationEmail($data);

            DB::commit();

           return response([
                'message' => 'Register success please check your email to verify your account',
                'access_token' => $apiToken,
             ], CREATED);

        } catch (\Exception $e) {
            DB::rollBack();
            return response([
                'message' => 'Register failed',
                'error' => $e->getMessage(),
            ], INTERNAL_SERVER_ERROR);
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
        //Create token APi Sanctum for user
        $user->createToken('myapptoken')->plainTextToken;
        $user->save();
        Auth::login($user);
        return redirect(RouteServiceProvider::HOME);
    }
}
