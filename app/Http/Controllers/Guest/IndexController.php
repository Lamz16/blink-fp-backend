<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $review = array(
            array(
                'star' => 5,
                'title' => 'Great support available',
                'content' => 'Thank you for your very professional and prompt response. I wished I had found you before I spent money on a competitors theme.',
                'user' => 'Amarachi Nkechi',
                'position' => 'UX Designer',
                'avatar' => 'images/avatar/avatar_11.jpg'
            ),
            array(
                'star' => 5,
                'title' => 'Great support available',
                'content' => 'Thank you for your very professional and prompt response. I wished I had found you before I spent money on a competitors theme.',
                'user' => 'Margje Jutten',
                'position' => 'Developer',
                'avatar' => 'images/avatar/avatar_12.jpg'
            ),
            array(
                'star' => 5,
                'title' => 'Great support available',
                'content' => 'Thank you for your very professional and prompt response. I wished I had found you before I spent money on a competitors theme.',
                'user' => 'Monica Böttger',
                'position' => 'UX Designer',
                'avatar' => 'images/avatar/avatar_13.jpg'
            ),
        );
        return view('guest.pages.welcome', compact('review'));
    }
}
