<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Api\Controller;
use App\Http\Requests\LoginRequest;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{

    /**
     * For check login
     *
     * @param  mixed $request
     * @return void
     */
    public function postLogin(LoginRequest $request)
    {
        if ($request->expectsJson()) {
                $user = User::where('email', $request->email)->first();

                if(!$user || !Hash::check($request->password, $user->password)) {
                    return response([
                        'message' => 'Bad creds'
                    ], 401);
                }

                $token = $user->createToken('token_login')->plainTextToken;

                return response([
                    'status' => 'success',
                    'message' => 'Login successfully',
                    'data' =>   $user,
                    'token' => $token
                ]);
            }
            return response([
                'status' => 'error',
                'message' => 'Login failed'
            ]);
    }


    /**
     * logout
     *
     * @param  mixed $request
     * @return void
     */
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }

}
