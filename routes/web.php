<?php

use App\Livewire\Auth\Login;
use Illuminate\Support\Facades\Route;

Route::get('/', Login::class);

Route::get('/admin', function(){
    return 'login admin';
})->middleware('auth', 'role:admin')->name('admin.dashboard');//name é um nome mais simples para acessar a rota
//acessa a página do admin

Route::get('/user', function(){
    return 'login user';
})->middleware(['auth', 'role:user'])->name('user.dashboard');//acessa a página do usuário