<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    function show() {
        return view('auth.login');
    }

    function authenticate(Request $request) {
        $validated = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (!$validated) {
            return back()->withInput($validated)->withErrors('failed', 'Please check email or password');
        }

        if (! Auth::attempt($validated)) {
            return back()->withInput($validated)->withErrors('failed', 'Please check email or password');
        }

        $request->session()->regenerate();

        return redirect()->intended('/dashboard');
    }
}
