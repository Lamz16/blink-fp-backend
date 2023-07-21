<?php

namespace App\Http\Controllers;

use App\Models\ShortLink;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller  
{
    /*
    Method index digunakan hanya untuk menampilkan view dari dasboard
    */
    function index() {   
        $short_links = ShortLink::where(['user_id' => Auth::user()->id])->get();


        return view('dashboard', compact('short_links'));
    }

    function store(Request $request) {
        /* Function atau method store merupakan action dari form tambah link nya*/
        $validated = $request->validate([
            'title' => 'required|min:3',
            'real_url' => 'required',
            'short_url' => 'required'
        ]);

        if (!$validated) { //untuk mengecek validasi dari input ketika input nya tidak sesuai maka akan terjadi kondisi eror dengan pesan please insert data
            return back()->withInput($validated)->withErrors('failed', 'Please insert correct data'); 
        }

        //auth digunakan untuk mengambil data user yang login, short link  akan mengecek apakah user yang mengisi ini benar benar sudah login
        //ketika sudah di cek maka akan menjalankan method create dengan param aray $validated dimana $validated ini sesuai dengan tabel pada database.
        Auth::user()->short_links()->create($validated);

        return redirect()->route('dashboard')->with('success', 'Success insert data');
    }

    function delete($id){
        //Method findOrFail merupakan method bawaan dari eloquent dari laravel 
        $filDel = ShortLink::findOrFail($id);
        $filDel->delete();
        //method delete adalah untuk menghapus, method ini merupakan bawaan dari laravel
        return redirect()->route('dashboard')->with('succes', 'Succes delete data');
    }
}
