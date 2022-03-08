<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\NewsDetailController;
use App\Http\Controllers\LatestNewsController;

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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
