<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('authentication');
});


Route::post('/register', [UserController::class, 'register']);

Route::post('/register', [UserController::class, 'login']);

Route::get('/home', function () {
    return view('home');
});

Route::get('/genre', function () {
    return view('genre');
});

