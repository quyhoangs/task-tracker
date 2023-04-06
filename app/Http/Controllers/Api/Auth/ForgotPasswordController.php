<?php

namespace App\Http\Controllers\Auth;

use App\Events\ForgetPassword;
use App\Http\Controllers\Controller;
use App\Http\Requests\ResetPasswordRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class ForgotPasswordController extends Controller
{
    public function showForgetPasswordForm()
    {
        return view('auth.forget-password');
    }

    /* Send an email to the user with a link that will allow them to reset their password.
     * The link will also contain a token that we can use to verify that the user is who they say they are.
     * If the user submits the form with a valid token, then we will allow them to choose a new password.
     * @param  mixed $request
     * @return void
     */
    public function submitForgetPasswordForm(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users',
        ]);

        $token = Str::random(64);

        $this->__storeToken($request, $token);

        $this->__fireForgetPasswordEvent($request, $token);

        return back()->with('message', 'We have e-mailed your password reset link!');
    }

    /**
     * Stores the token in the database
     * $request: the request object
     * $token: the token to be stored
     *
     * @param  mixed $request
     * @param  mixed $token
     * @return void
     */
    private function __storeToken(Request $request, string $token)
    {
        DB::table('password_resets')->insert([
            'email' => $request->email,
            'token' => $token,
            'created_at' => Carbon::now()
          ]);
    }

    /**
     * This function sends a password reset link to the user's email address.
     *
     * @param  mixed $request
     * @param  mixed $token
     * @return void
     */
    private function __fireForgetPasswordEvent(Request $request, string $token): void
    {
        $data = [
            'token' => $token,
            'email' => $request->email
        ];
        event(new ForgetPassword($data));
    }

    public function showResetPasswordForm($token){
        //check $token is valid or not
        $checkToken = DB::table('password_resets')->where('token', $token)->first();
        if(!$checkToken) return redirect('/login')->with('error', 'Invalid token!');

        return view('auth.reset-password', ['token' => $token]);
    }

    public function submitResetPasswordForm(ResetPasswordRequest $request)
    {
        $updatePassword = DB::table('password_resets')
                            ->where([
                                'email' => $request->email,
                                'token' => $request->token,
                            ])
                            ->first();

        if(!$updatePassword) return back()->withInput()->with('error', 'Invalid token!');

        $user = User::where('email', $request->email);

        $user->update([
            'password' => Hash::make($request->password)
        ]);

        DB::table('password_resets')->where(['email'=> $request->email])->delete();
        return redirect('/login')->with('message', 'Your password has been changed!');
    }

}
