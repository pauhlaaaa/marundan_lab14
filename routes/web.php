<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AuthController;


Route::get('/', function () {
    return auth()->check()
        ? redirect()->route('posts.index')
        : Redirect::to('/login');
});


Route::get('/register', [AuthController::class, 'showRegister']);
Route::post('/register', [AuthController::class, 'register']);

Route::get('/login', [AuthController::class, 'showLogin']);
Route::post('/login', [AuthController::class, 'login']);


Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth');

Route::resource('posts', PostController::class)->middleware('auth');
