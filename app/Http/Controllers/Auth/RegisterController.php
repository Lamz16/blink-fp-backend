<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RegisterController extends Controller
{
    function show() {
        return view('auth.register'); //untuk menampilkan halaman register
    }

    function store(Request $request) {
        //method store digunakan untuk menambahkan data, baru 
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

        DB::beginTransaction(); //begin transaksi yakni sebagai

        try {
            User::create($validated);
            DB::commit();
            //dijalankan dlu proses pembuatan user nya dan dijalankan inisialisasi transaksi di database nya
            return redirect()->route('guest.login')->with('success', 'Success to register accoutn');
            //ketika berhasil maka akan dibawa ke halaman login
        } catch (\Throwable $th) {
            //ketika gagal maka akan di catch eror nya dan transaksi di database nya di tiadakan
            DB::rollBack();
            return back()->withErrors('failed', 'Error to register!');
            //ketika eror maka akan ditampilkan pesan nya.
        }
    }
}
