<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RegisterController extends Controller
{
    function show() {
        return view('auth.register');
    }

    function store(Request $request) {
        $validated = $request->validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
            'username' => 'required|unique:users,username',
            'password' => 'required|confirmed|min:4'
        ]);

        if (!$validated) {
            return back()->withInput($validated);
        }

        $validated['admin'] = false;
        $validated['password'] = \Hash::make($request->post('password'));

        DB::beginTransaction();

        try {
            User::create($validated);
            DB::commit();

            return redirect()->route('guest.login')->with('success', 'Success to register accoutn');
        } catch (\Throwable $th) {
            DB::rollBack();
            return back()->withErrors('failed', 'Error to register!');
        }
    }
}
