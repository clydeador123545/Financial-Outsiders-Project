<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BlogpostController;
use App\Http\Controllers\RegistrationController;

Route::get('/',function() {
    return view('home');
});

Route::get('/register', function () {
    return view('register');
});

Route::post('/register', [RegistrationController::class, 'register']);

Route::post('/blogposts', [BlogpostController::class, 'store']);


Route::get('/login', function() {
    return view('login');
})->name('login');

Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth');