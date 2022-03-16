<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontEndController;
use App\Http\Controllers\DashBoardController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\CommentsController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\CategoryController;
// use App\Http\Controllers\AdminPostController;

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

// Auth::routes();

Route::get('/', [FrontEndController::class, 'homepage'])->name('homepage');
Route::get('/newsdetails', [FrontEndController::class, 'newsdetails'])->name('newsdetails');
Route::get('/latestnews', [FrontEndController::class, 'latestnews'])->name('latestnews');
Route::get('/regions', [FrontEndController::class, 'region'])->name('region');
Route::get('/contact', [FrontEndController::class, 'contact'])->name('contact');
Route::get('/exclusive-news', [FrontEndController::class, 'exclusive'])->name('exclusive');
Route::get('/africa-news', [FrontEndController::class, 'africa'])->name('africa');



// Route::group(['prefix' => 'admin', 'middleware' => ['auth:sanctum', 'verified']], function()
// {
//     Route::get('/dashboard', [DashBoardController::class , 'index'])->name('dashboard');

//     Route::resource('category', CategoryController::class);
//     Route::resource('post', PostController::class);
//     Route::resource('tag', TagController::class);
//     Route::resource('settings', SettingsController::class);

//     Route::get('comment', [CommentsController::class, 'index'])->name('index');
//     Route::get('calendar', [DashBoardController::class, 'calendar'])->name('index');
// });
