<?php

use App\Http\Controllers\PostController;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\MerchShowController;

use App\Http\Controllers\ProductUploadController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AlbumController;
use App\Http\Controllers\BandController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PusherController;
use App\Http\Controllers\FollowController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\SslCommerzPaymentController;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('authentication');
});


Route::get('/admin-only', function () {
    return view('admin/admin-panel');
})->middleware('can:visitAdminPages');





Route::get('/admin/latest-album', function () {
    return view('admin/latest-album');
});



Route::get('/spotify', function () {
    return view('spotify');
});

Route::get('/admin/following-list', function () {
    return view('/admin/following-list');
});

Route::get('/music-news', function () {
    return view('music-news');
});

Route::post('/admin/upcoming-events', [EventController::class, 'store'])->name('admin.upcoming-events.store');
Route::get('/admin/upcoming-events', [EventController::class, 'index1']);

Route::get('/admin/create-news', [NewsController::class, 'create']);
Route::post('/admin/create-news', [NewsController::class, 'store']);

// Route::get('/admin/following-list', [AdminController::class, 'index']);

Route::get('/admin/events-tickets', [TicketController::class, 'index']);

Route::get('/admin/events-tickets', [TicketController::class, 'index']);

Route::post('/admin/merch-product', [ProductUploadController::class, 'storeProduct'])->name('admin.merch-product.storeProduct');
Route::get('/admin/merch-product', [ProductUploadController::class, 'index1']);
Route::delete('/admin/merch-product/{id}', [ProductUploadController::class, 'delete'])->name('delete_product');

Route::get('/merch', [ProductUploadController::class, 'index2']);


Route::post('/register', [UserController::class, 'register'])->name('register');

Route::post('/register', [UserController::class, 'login']);

Route::get('/home', function () {
    return view('home');
}) -> middleware('App\Http\Middleware\MustBeLoggedIn');



Route::get('/home', [EventController::class, 'index2']);
Route::post('/home', [TicketController::class, 'storeTicket'])->name('storeTicket');


Route::get('/genre', function () {
    return view('genre');
}) -> middleware('App\Http\Middleware\MustBeLoggedIn');








Route::get('/music-lyrics', function () {
    return view('music-lyrics');
}) -> middleware('App\Http\Middleware\MustBeLoggedIn');

Route::get('/homepage-feed', function () {
    return view('homepage-feed');
}) -> middleware('App\Http\Middleware\MustBeLoggedIn');


Route:: get('/create-post', [PostController::class, 'showCreateForm']);
Route:: post('/create-post', [PostController::class, 'storeNewPost']);
Route:: get('/post/{post}', [PostController::class, 'viewSinglePost']);
Route:: delete('/post/{post}', [PostController::class, 'delete'])->middleware('can:delete,post');
Route:: get('/post/{post}/edit', [PostController::class, 'showEditForm'])->middleware('can:update,post');
Route:: put('/post/{post}', [PostController::class, 'updatedPost'])->middleware('can:update,post');
Route:: get('/edit-profile', [UserController::class, 'showAvatarForm']);
Route:: post('/edit-profile', [UserController::class, 'storeAvatar']);
Route:: get('/following/{username}', [UserController::class, 'profileFollowing']);
Route:: get('/followers/{username}', [UserController::class, 'profileFollowers']);


Route:: get('/profile/{user:username}', [UserController::class, 'profile']);


Route::get('/checkout', [SslCommerzPaymentController::class, 'exampleHostedCheckout']);

Route::post('/pay', [SslCommerzPaymentController::class, 'index']);
Route::post('/pay-via-ajax', [SslCommerzPaymentController::class, 'payViaAjax']);

Route::post('/success', [SslCommerzPaymentController::class, 'success']);
Route::post('/fail', [SslCommerzPaymentController::class, 'fail']);
Route::post('/cancel', [SslCommerzPaymentController::class, 'cancel']);

Route::post('/ipn', [SslCommerzPaymentController::class, 'ipn']);



Route::get('/chat-home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/message', [HomeController::class, 'sendMessage']);  
Route::get('/message/{id}', [HomeController::class, 'getMessage'])->name('message');
Route::get('/ShowMassage/{id}', [HomeController::class, 'ShowMassage']);
Route::get('/subscribe', [HomeController::class, 'subscribe']);
Route::get('/unFollow/{id}', [HomeController::class, 'remove_user']);
Route::get('/group/create', [GroupController::class, 'create_form']);
Route::get('/group/create', [GroupController::class, 'create']);
Route::get('/group/join', [GroupController::class, 'join_form']);
Route::get('/group/create', [GroupController::class, 'join']);
Route::get('/group/edit/{id}', [GroupController::class, 'edit']);
Route::get('/group/update/{id}', [GroupController::class, 'update']);
Route::get('/group/delete/{id}', [GroupController::class, 'deleteGroup']);
Route::get('/group/members_list/{id}', [GroupController::class, 'members_list']);
Route::get('/remove_user/{id}/{user_id}', [GroupController::class, 'remove_user']);



Route::post('/create-follow/{user:username}', [FollowController::class, 'createFollow']) -> middleware('App\Http\Middleware\MustBeLoggedIn');
Route::post('/remove-follow/{user:username}', [FollowController::class, 'removeFollow']) -> middleware('App\Http\Middleware\MustBeLoggedIn');



Route::get('/news', function () {
    return view('news');
}) -> middleware('App\Http\Middleware\MustBeLoggedIn');

Route::get('/bands', [BandController::class, 'create']);
Route::get('/admin/add-band', [BandController::class, 'create_admin']);
Route::post('/admin/add-band', [BandController::class, 'store']);
Route::get('/admin/add-album', [AlbumController::class, 'create']);
Route::post('/admin/add-album', [AlbumController::class, 'store']);

Route::post('/admin/add-album', [AlbumController::class, 'store']);

Route::get('/admin/merch-order', [SslCommerzPaymentController::class, 'showOrders']);


