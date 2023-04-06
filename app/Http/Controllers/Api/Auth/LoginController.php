<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    // /**
    //  * Display a listing of the resource.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    // public function index()
    // {
    //     return view('auth.login', [
    //         'email' => old('email'),
    //         'password' => old('password'),
    //     ]);
    // }

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
                $this->regenerateSession($request);
                $token = $user->createToken('myapptoken')->plainTextToken;
                return response([
                    'status' => 'success',
                    'message' => 'Login successfully',
                    'data' => auth()->user(),
                    'token' => $token
                ]);
            }
            return response([
                'status' => 'error',
                'message' => 'Login failed'
            ]);
    }

    // private function determineRedirectPath($request)
    // {
    //     if (auth()->user()->role_id == Role::IS_ADMIN) {
    //         return redirect()->intended('admin');
    //     }
    //     return redirect()->intended('projects');
    // }

    /**
     * checkIfAuthAttemptIsSuccessful
     *
     * @param  mixed $request
     * @return void
     */
    // private function checkIfAuthAttemptIsSuccessful($request)
    // {
    //     $remember_me = $request->has('remember_me') ? true : false;
    //     return Auth::attempt(['email' => $request->email, 'password' => $request->password], $remember_me);
    // }

    /**
     * regenerateSession
     *
     * @param  mixed $request
     * @return void
     */
    private function regenerateSession($request)
    {
        $request->session()->regenerate();
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
