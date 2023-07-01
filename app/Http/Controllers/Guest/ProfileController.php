<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, $username)
    {
        $user = User::where(['username' => $username])->firstOrFail();
        $short_links = $user->short_links;

        return view('show', compact('user', 'short_links'));
    }
}
