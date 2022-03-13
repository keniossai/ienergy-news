<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\NewsDetailController;
use App\Http\Controllers\LatestNewsController;
use App\Http\Controllers\DashBoardController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentsController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\RegionNewsController;
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

// Route::get('/', [HomePageController::class, 'homepage'])->name('homepage');
// Route::get('/newsdetails', [NewsDetailController::class, 'newsdetails'])->name('newsdetails');
// Route::get('/latestnews', [LatestNewsController::class, 'latestnews'])->name('latestnews');
// Route::get('/region', [RegionNewsController::class, 'region'])->name('region');



Route::group(['prefix' => 'admin', 'middleware' => ['auth:sanctum', 'verified']], function()
{
    Route::get('/dashboard', [DashBoardController::class , 'index'])->name('dashboard');

    Route::resource('category', CategoryController::class);
    Route::resource('posts', PostController::class);
});
