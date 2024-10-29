<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Post\IndexController;
use App\Http\Controllers\Page\AboutController;
use App\Http\Controllers\Page\ContactController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\Post\PostCreateController;
use App\Http\Controllers\Admin\Post\PostDestroyController;
use App\Http\Controllers\Admin\Post\PostEditController;
use App\Http\Controllers\Admin\Post\PostController;
use App\Http\Controllers\Admin\Post\PostShowController;
use App\Http\Controllers\Admin\Post\PostStoreController;
use App\Http\Controllers\Admin\Post\PostUpdateController;
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

Route::group(['namespace' => 'Admin', 'prefix' => 'admin'], function () {
    Route::get('/', [AdminController::class, '__invoke'])->name('admin');

    Route::group(['namespace' => 'Post'], function () {
        Route::get('/post', [PostController::class, '__invoke'])->name('admin.post.index');
        Route::get('/post/create', [PostCreateController::class, '__invoke'])->name('admin.post.create');
        Route::post('/post', [PostStoreController::class, '__invoke'])->name('admin.post.store');
        Route::get('/post/{post}', [PostShowController::class, '__invoke'])->name('admin.post.show');
        Route::get('/post/{post}/edit', [PostEditController::class, '__invoke'])->name('admin.post.edit');
        Route::patch('/post/{post}', [PostUpdateController::class, '__invoke'])->name('admin.post.update');
        Route::delete('/post/{post}', [PostDestroyController::class, '__invoke'])->name('admin.post.delete');
    });
});
