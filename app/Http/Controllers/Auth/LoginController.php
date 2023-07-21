<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    function show() {
        return view('auth.login'); //mengembalikan tampilan dari view login yang berada di folder view
    }

    function authenticate(Request $request) {
        $validated = $request->validate([
            'email' => 'required|email', 
            'password' => 'required' //untuk build required merupakan fitur dari laravel sebagai validasi input
        ]);

        if (!$validated) { //inisialisasi input ketika input nya tidak terpenuhi maka akan berjalan kondisi validasi nya
            return back()->withInput($validated)->withErrors('failed', 'Please check email or password');
        }

        if (! Auth::attempt($validated)) {  //untuk laravel login nya menggunakan email dan password, 
            return back()->withInput($validated)->withErrors('failed', 'Please check email or password');
        }

        $request->session()->regenerate();
        //untuk validasi identitas, maka akan dibuatkan session baru

        return redirect()->intended('/dashboard');
    }
}
