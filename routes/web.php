<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BlogpostController;
use App\Http\Controllers\RegistrationController;
use App\Models\Blogposts;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


Route::get('/',function() {
    return view('home');
});

Route::get('/register', function () {
    return view('register');
});

Route::post('/register', [RegistrationController::class, 'register']);

Route::post('/blogposts', [BlogpostController::class, 'store']);

Route::get('/blogpost/{id}', function($id){
    $blogpost = Blogposts::findOrFail($id);
    $otherPosts = Blogposts::where('blogpost_id', '!=', $id)
        ->inRandomOrder()
        ->limit(5)
        ->get();

    return view('blogpost', [
        'blogpost' => $blogpost,
        'otherPosts' => $otherPosts
    ]);
});

Route::get('/login', function() {
    return view('login');
})->name('login');

Route::post('/login', [AuthController::class, 'login']);

Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth');

Route::get('/profile/{id}', function ($id){
    $user = User::findOrFail($id);

    return view('profile', ['user' => $user]);
});


