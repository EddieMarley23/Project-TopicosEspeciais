<?php

use App\Livewire\Cadastro;
use App\Livewire\Login;
use App\Livewire\Home;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// rota de home
Route::get('/', Home::class)->name('home')->middleware('auth');

// rotas para autenticação do usuário
Route::get('/cadastro', Cadastro::class)->name('cadastro');
Route::get('/login', Login::class)->name('login');
Route::get('/logout', function () {
    Auth::logout();
    return redirect()->route('login');
})->name('logout');
