<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LogoutController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request) //
    {
        Auth::logout();
        //terjadi break session dengan alur invalidasi sesi yang tersimpan dan memberi ruang untuk regenerate session baru lagi            
        $request->session()->invalidate();
        $request->session()->regenerate();
        
        return redirect()->route('guest.login');
    }
}
