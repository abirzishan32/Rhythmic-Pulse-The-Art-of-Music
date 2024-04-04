<?php

use App\Http\Controllers\PostController;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;



Route::get('/', function () {
    return view('authentication');
});


Route::post('/register', [UserController::class, 'register'])->name('register');

Route::post('/register', [UserController::class, 'login']);

Route::get('/home', function () {
    return view('home');
}) -> middleware('App\Http\Middleware\MustBeLoggedIn');

Route::get('/genre', function () {
    return view('genre');
}) -> middleware('App\Http\Middleware\MustBeLoggedIn');

Route:: get('/create-post', [PostController::class, 'showCreateForm']);
Route:: post('/create-post', [PostController::class, 'storeNewPost']);
Route:: get('/post/{post}', [PostController::class, 'viewSinglePost']);
Route:: delete('/post/{post}', [PostController::class, 'delete'])->middleware('can:delete,post');
Route:: get('/post/{post}/edit', [PostController::class, 'showEditForm'])->middleware('can:update,post');
Route:: put('/post/{post}', [PostController::class, 'updatedPost'])->middleware('can:update,post');


Route:: get('/profile/{user:username}', [UserController::class, 'profile']);
