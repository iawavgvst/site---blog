<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Post\IndexController;
use App\Http\Controllers\Page\AboutController;
use App\Http\Controllers\Page\ContactController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::group(['namespace' => 'Post'], function () {
    Route::get('/', [IndexController::class, '__invoke'])->name('post');
});

Route::group(['namespace' => 'Page'], function () {
    Route::get('/about', [AboutController::class, '__invoke'])->name('about');
    Route::get('/contact', [ContactController::class, '__invoke'])->name('contact');
});
