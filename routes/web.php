<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;

Auth::routes();

/*--------------------------------------------------------------------------
| ROTAS HOME
|--------------------------------------------------------------------------*/
Route::get('/', [HomeController::class, 'index'])->name('home');


/*--------------------------------------------------------------------------
| ROTAS AUTENTICAÇÃO
|--------------------------------------------------------------------------*/
Route::get('/dashboard', [AuthController::class, 'admin'])->name('admin');
Route::get('/login', [AuthController::class, 'login'])->name('login.form');
Route::post('/login/auth',[AuthController::class, 'autenticar'])->name('login.auth');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');