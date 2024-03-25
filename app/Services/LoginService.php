<?php

namespace App\Services;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginService
{
    /**
     * Attempt to authenticate a user.
     *
     * @param Request $request
     * @return bool
     */
    public function login(Request $request): bool
    {
        $credentials = [
            'email' => $request->email,
            'password' => $request->password
        ];

        $remember = $request->remember;

        return Auth::attempt($credentials, $remember);
    }

    /**
     * Log out the currently authenticated user.
     *
     * @return void
     */
    public function logout(): void
    {
        Auth::logout();
    }
}
