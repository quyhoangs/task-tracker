<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Api\Controller;
use App\Models\User;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Laravel\Socialite\Facades\Socialite;

class OAuthProviderController extends Controller
{
    /**
     * Redirect the user to the authentication page for the given provider.
     *
     * @param string $provider
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    /**
     * Obtain the user information from the provider and create or retrieve
     * the user from our own database.
     *
     * @param string $provider
     * @return \Illuminate\Http\JsonResponse
     */
    public function handleProviderCallback($provider)
    {
        try {
            // Retrieve user information from provider
            $providerUser = Socialite::driver($provider)->user();
        } catch(Exception $e) {
            // Handle errors
            return response()->json([
                'message' => 'Login failed with ' . $provider . '',
                'error' => $e->getMessage()
            ], 500);
        }

        // Create or retrieve user from our own database
        $authUser = $this->findOrCreateUser($providerUser, $provider);

        // Create a token for the authenticated user
        $token = $authUser->createToken('authTokenWithSociallite')->plainTextToken;

        // Return a response with the token and user information
        //set token into local
        // $cookie = cookie('token', $token, 60 * 24); // 1 day

        // return redirect('http://localhost:8080/project')->withCookie($cookie);

        return response()->json([
            'message' => 'Login success with ' . $provider . '',
            'token' => $token,
            'user' => $authUser
        ], 200);
    }

    /**
     * Find or create a user in our own database based on the given provider user.
     *
     * @param \Laravel\Socialite\Contracts\User $providerUser
     * @param string $provider
     * @return \App\Models\User
     */
    public function findOrCreateUser($providerUser, $provider)
    {
        try {
            DB::beginTransaction();
            $user = User::where('email', $providerUser->getEmail())->first();

            if ($user) {
                // Update thông tin của người dùng nếu có sự thay đổi bên OAuth Provider

                $user->update([
                    'name' => $providerUser->getName() ?? $providerUser->getNickname(),
                    'avatar' => $providerUser->getAvatar() ,
                    'is_email_verified' => 1,
                ]);
                // dd($providerUser,$user,$providerUser->getName() ?? $providerUser->getNickname());
                // Update hoặc tạo Social Identity cho người dùng
                $this->updateOrCreateSocialIdentity($user, $providerUser, $provider);
            } else {
                //Nếu Email này chưa có trong project,Tạo một tài khoản mới với mật khẩu ngẫu nhiên
                $user = User::create([
                    'name' => $providerUser->getName() ?? $providerUser->getNickname(),
                    'email' => $providerUser->getEmail(),
                    'avatar' => $providerUser->getAvatar(),
                    'is_email_verified' => 1,
                    'password' => Hash::make(Str::random(10)),
                ]);

                //Trường hợp User lấy email này để login vào hệ thống thì cần xác nhận email
                // gửi email xác nhận đến người dùng Update Password

                // Update hoặc tạo Social Identity cho người dùng
                $this->updateOrCreateSocialIdentity($user, $providerUser, $provider);

            }
            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
            throw $e;
        }

        return $user;
    }

    public function updateOrCreateSocialIdentity($user, $providerUser, $provider)
    {
        $user->socialIdentity()->updateOrCreate([
            'provider_id' => $providerUser->getId(),
            'provider_name' => $provider,
        ], [
            'access_token' => $providerUser->token,
            'refresh_token' => $providerUser->refreshToken,
            'expires_in' => $providerUser->expiresIn,
        ]);
    }
}
