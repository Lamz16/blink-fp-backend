<?php

namespace App\Http\Controllers;

use App\Models\ShortLink;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    function index() {
        $short_links = ShortLink::where(['user_id' => Auth::user()->id])->get();


        return view('dashboard', compact('short_links'));
    }

    function store(Request $request) {
        $validated = $request->validate([
            'title' => 'required|min:3',
            'real_url' => 'required',
            'short_url' => 'required'
        ]);

        if (!$validated) {
            return back()->withInput($validated)->withErrors('failed', 'Please insert correct data');
        }

        Auth::user()->short_links()->create($validated);

        return redirect()->route('dashboard')->with('success', 'Success insert data');
    }
}
