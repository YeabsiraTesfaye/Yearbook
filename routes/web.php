<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
// Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);

Route::get('/y',[App\Http\Controllers\YearbookController::class, 'create']);
Route::get('/y/{yearbook}',[App\Http\Controllers\HomeController::class, 'show']);
Route::get('/y/{yearbook}/album',[App\Http\Controllers\PostController::class, 'showAlbum']);
Route::get('/y/{yearbook}/events',[App\Http\Controllers\EventController::class, 'showEvents']);
Route::get('/y/{yearbook}/album/edit',[App\Http\Controllers\PostController::class, 'editAlbum']);
Route::get('/y/{yearbook}/edit',[App\Http\Controllers\YearbookController::class, 'edit']);
Route::get('/y/p/{post}/{action}',[App\Http\Controllers\PostController::class, 'updatePhoto']);
Route::get('/getUserPosts/{id}',[App\Http\Controllers\PostController::class, 'getUserPosts'])->name('search Result');
Route::get('/addGroupImage/{yearbook}/{department}',[App\Http\Controllers\PostController::class, 'groupImage'])->name('search Result');
Route::get('/getYearbook/{id}',[App\Http\Controllers\YearbookController::class, 'getYearbook']);
Route::get('/check/{yearbook}',[App\Http\Controllers\YearbookController::class, 'checkStatus']);
Route::get('/photos/{event}',[App\Http\Controllers\EventController::class, 'showPhotos']);
Route::get('/export/{yearbook}',[App\Http\Controllers\YearbookController::class, 'export']);
Route::get('/search',[App\Http\Controllers\YearbookController::class, 'search']);
Route::get('/demo/{yearbook}',[App\Http\Controllers\YearbookController::class, 'demo'])->name('post.edit');
Route::get('/progress/{yearbook}',[App\Http\Controllers\YearbookController::class, 'progress'])->name('post.edit');
Route::get('/verify',[App\Http\Controllers\Auth\RegisterController::class, 'verifyUser'])->name('verify.user');
Route::get('/about',function(){
    return view('website.about');
});
Route::get('/contact',function(){
    return view('website.contact');
});Route::get('/userManual',function(){
    return view('website.userManual');
});

Route::post('/addUser',[App\Http\Controllers\UserYearbookController::class, 'store'])->name('yearbook.store');
Route::post('/createEvent',[App\Http\Controllers\EventController::class, 'store'])->name('event.store');
Route::post('/addAdmin',[App\Http\Controllers\UserYearbookController::class, 'addAdmin'])->name('yearbook.store');
Route::post('/p/addPost',[App\Http\Controllers\PostController::class, 'store'])->name('post.store');
Route::post('/y',[App\Http\Controllers\YearbookController::class, 'store'])->name('yearbook.store');
Route::post('/lock/{yearbook}/{action}',[App\Http\Controllers\YearbookController::class, 'lock'])->name('yearbook.edit');
Route::post('/import',[App\Http\Controllers\UserYearbookController::class, 'import']);
Route::post('/y/addGroupPhotos/store',[App\Http\Controllers\PostController::class, 'storeGroupPhotos'])->name('post.groupImage');;
Route::post('/y/addPhotos/store',[App\Http\Controllers\EventController::class, 'storePhotos']);


Route::patch('/y/{yearbook}/p/{post}/bouncer',[App\Http\Controllers\PostController::class, 'update'])->name('yearbook.edit');
Route::patch('/y/p/{post}/addimage/{action}',[App\Http\Controllers\PostController::class, 'patch'])->name('yearbook.edit');
Route::patch('/y/p/{post}/editLastWord',[App\Http\Controllers\PostController::class, 'updateLastword'])->name('post.edit');
Route::patch('/y/{yearbook}',[App\Http\Controllers\YearbookController::class, 'update'])->name('yearbook.update');



Route::delete('/y/p/delete',[App\Http\Controllers\PostController::class, 'deleteONe']);
Route::delete('/y/group/delete',[App\Http\Controllers\PostController::class, 'deleteGroup']);
Route::delete('/y/delete',[App\Http\Controllers\YearbookController::class, 'delete']);
// Route::get('/p/{yearbook}',[App\Http\Controllers\PostController::class, 'show'])->name('post.show');