<?php

use App\Http\Controllers\Auth\BookController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\UserController;

Route::get('', function(){
    return view ('pages.dashboard');
})->middleware('auth')->name('dashboard');

Route::controller(UserController::class)->group(function(){
    Route::get('cadastro', 'register')->name('register');
    Route::post('guardar', 'store')->name('store');
    Route::get('entrar', 'login')->name('login');
    Route::post('autenticar', 'authenticate')->name('authenticate');
    Route::post('logout', 'logout')->name('logout');
});

Route::controller(BookController::class)->group(function(){
    Route::get('cadastro-livro', 'register_book')->name('register-book')->middleware('auth');
    Route::post('guardar-livro', 'store_book')->name('store-book');
    Route::get('lista-livro', 'list_book')->name('list-book')->middleware('auth');
    Route::get('editar-livro', 'edit_book')->name('edit-book')->middleware('auth');
    ROute::get('remover-livro', 'remove_book')->name('remove-book');
});




