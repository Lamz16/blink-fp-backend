<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Guest;
use App\Http\Controllers\Auth;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\DashboardController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::name('guest.')->group(function() {
    Route::get('/', Guest\IndexController::class)->name('index');
    Route::get('/contact', Guest\ContactController::class)->name('contact');

    Route::get('/login', [Auth\LoginController::class, 'show'])->middleware('guest')->name('login');
    Route::post('/login', [Auth\LoginController::class, 'authenticate'])->middleware('guest')->name('authenticate');
    Route::get('/register', [Auth\RegisterController::class, 'show'])->middleware('guest')->name('register');
    Route::post('/register', [Auth\RegisterController::class, 'store'])->middleware('guest')->name('store');
});

Route::post('/logout', LogoutController::class)->middleware('auth')->name('logout');

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth')->name('dashboard');
Route::post('/dashboard', [DashboardController::class, 'store'])->middleware('auth')->name('link.store');


Route::get('/{username}', Guest\ProfileController::class)->name('link.show');