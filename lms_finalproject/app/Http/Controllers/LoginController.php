<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Menampilkan formulir login.
     *
     * @return \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
     */
    public function showLoginForm()
    {
        return view('auth.login');
    }

    /**
     * Memproses login pengguna.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function login(Request $request)
    {
        $credentials = $this->validateLogin($request);

        if (Auth::once($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/');
        }

        return back()->withErrors([
            'email' => __('validation.invalid_credentials'),
        ]);
    }

    /**
     * Validasi data login.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    protected function validateLogin(Request $request)
    {
        return $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
    }
}
