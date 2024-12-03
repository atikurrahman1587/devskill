<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', function (){
    if (auth()->check()) {
        return redirect()->route('dashboard');
    }else{
        return redirect()->route('login.form');
    }
});

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'loginCheck'])->name('login.check');

Route::middleware('auth')->group(function (){
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/register', [AuthController::class, 'user_store'])->name('register.store');
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
});
