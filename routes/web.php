<?php

use App\Http\Controllers\PostController;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\MerchShowController;
use App\Http\Controllers\ProductUploadController;

Route::get('/', function () {
    return view('authentication');
});


Route::get('/admin-only', function () {
    return view('admin/admin-panel');
})->middleware('can:visitAdminPages');

// Route::get('/admin/upcoming-events', function () {
//     return view('admin/upcoming-events');
// });




Route::get('/admin/latest-album', function () {
    return view('admin/latest-album');
});






Route::post('/admin/upcoming-events', [EventController::class, 'store'])->name('admin.upcoming-events.store');
Route::get('/admin/upcoming-events', [EventController::class, 'index1']);



Route::post('/admin/merch-product', [ProductUploadController::class, 'storeProduct'])->name('admin.merch-product.storeProduct');
Route::get('/admin/merch-product', [ProductUploadController::class, 'index1']);
Route::get('/merch', [ProductUploadController::class, 'index2']);


Route::post('/register', [UserController::class, 'register'])->name('register');

Route::post('/register', [UserController::class, 'login']);

Route::get('/home', function () {
    return view('home');
}) -> middleware('App\Http\Middleware\MustBeLoggedIn');



Route::get('/home', [EventController::class, 'index2']);

Route::get('/genre', function () {
    return view('genre');
}) -> middleware('App\Http\Middleware\MustBeLoggedIn');


Route::get('/course', function () {
    return view('course');
}) -> middleware('App\Http\Middleware\MustBeLoggedIn');

Route:: get('/create-post', [PostController::class, 'showCreateForm']);
Route:: post('/create-post', [PostController::class, 'storeNewPost']);
Route:: get('/post/{post}', [PostController::class, 'viewSinglePost']);
Route:: delete('/post/{post}', [PostController::class, 'delete'])->middleware('can:delete,post');
Route:: get('/post/{post}/edit', [PostController::class, 'showEditForm'])->middleware('can:update,post');
Route:: put('/post/{post}', [PostController::class, 'updatedPost'])->middleware('can:update,post');
Route:: get('/edit-profile', [UserController::class, 'showAvatarForm']);
Route:: post('/edit-profile', [UserController::class, 'storeAvatar']);




Route:: get('/profile/{user:username}', [UserController::class, 'profile']);
