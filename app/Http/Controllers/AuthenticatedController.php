<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class AuthenticatedController extends Controller
{
    public $credentials = [];

    /* Handle the login request */
    public function login(Request $request): RedirectResponse
    {
        $this->credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required', 'string'],
            'remember' => ['sometimes', 'boolean'],
        ]);

        $remember = $request->boolean('remember');

        if (! Auth::attempt([
            'email' => $this->credentials['email'],
            'password' => $this->credentials['password'],
        ], $remember)) {
            return back()
                ->withErrors(['login' => 'The provided credentials are incorrect.'])
                ->withInput($request->only('email', 'remember'))
                ->with('showLoginModal', true);
        }

        $request->session()->regenerate();

        return redirect()->route('home');
    }

    /* Handle the logout request */
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('home');
    }
}
