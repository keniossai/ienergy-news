<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\NewsDetailController;
use App\Http\Controllers\LatestNewsController;
use App\Http\Controllers\DashBoardController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentsController;
use App\Http\Controllers\SettingsController;
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

Route::get('/', [HomePageController::class, 'homepage'])->name('homepage');
Route::get('/newsdetails', [NewsDetailController::class, 'newsdetails'])->name('newsdetails');
Route::get('/latestnews', [LatestNewsController::class, 'latestnews'])->name('latestnews');



Route::group(['middleware' => ['auth:sanctum', 'verified']], function()
{
    Route::get('admin/dashboard', [DashBoardController::class , 'dashboard'])->name('dashboard');
    Route::get('admin/calendar', [DashBoardController::class , 'index'])->name('index');
    Route::get('admin/posts', [PostController::class, 'show'])->name('posts');
    Route::get('admin/comments', [CommentsController::class, 'comments'])->name('comments');
    Route::get('admin/settings', [SettingsController::class, 'index'])->name('settings');

});

















// Study Route properly before using the commented code below

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');
// Route::middleware(['auth:sanctum', 'verified'])->get('/posts', function () {
//     return view('admin.post.posts');
// })->name('posts');
// Route::middleware(['auth:sanctum', 'verified'])->get('/calendar', function () {
//     return view('admin.calender.index');
// })->name('index');
