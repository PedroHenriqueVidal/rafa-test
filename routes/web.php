<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\UserController;

Route::get('', function () {
    return view('pages.dashboard');
})->middleware('auth');

Route::controller(UserController::class)->group(function(){
    Route::get('/cadastro', 'register')->name('register');
    Route::post('/store', 'store')->name('store');
    Route::get('/login', 'login')->name('login');
    Route::post('/autenticar', 'authenticate')->name('authenticate');
    Route::post('/logout', 'logout')->name('logout');
});

