<?php

use App\Http\Controllers\Admin\Category\CategoryController;
use App\Http\Controllers\Admin\Category\CategoryCreateController;
use App\Http\Controllers\Admin\Category\CategoryDestroyController;
use App\Http\Controllers\Admin\Category\CategoryEditController;
use App\Http\Controllers\Admin\Category\CategoryShowController;
use App\Http\Controllers\Admin\Category\CategoryStoreController;
use App\Http\Controllers\Admin\Category\CategoryUpdateController;
use App\Http\Controllers\Admin\Post\PostController;
use App\Http\Controllers\Admin\Post\PostCreateController;
use App\Http\Controllers\Admin\Post\PostDestroyController;
use App\Http\Controllers\Admin\Post\PostEditController;
use App\Http\Controllers\Admin\Post\PostShowController;
use App\Http\Controllers\Admin\Post\PostStoreController;
use App\Http\Controllers\Admin\Post\PostUpdateController;
use App\Http\Controllers\Admin\User\UserController;
use App\Http\Controllers\Admin\User\UserCreateController;
use App\Http\Controllers\Admin\User\UserDestroyController;
use App\Http\Controllers\Admin\User\UserEditController;
use App\Http\Controllers\Admin\User\UserShowController;
use App\Http\Controllers\Admin\User\UserStoreController;
use App\Http\Controllers\Admin\User\UserUpdateController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Account\Like\LikeController;
use App\Http\Controllers\Account\Comment\CommentController;
use App\Http\Controllers\Account\AccountController;
use App\Http\Controllers\Post\IndexController;
use App\Http\Controllers\Page\AboutController;
use App\Http\Controllers\Page\ContactController;
use App\Http\Controllers\Admin\AdminController;
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

Auth::routes(['verify' => true]);

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::group(['namespace' => 'Post'], function () {
    Route::get('/', [IndexController::class, '__invoke'])->name('post');
});

Route::group(['namespace' => 'Page'], function () {
    Route::get('/about', [AboutController::class, '__invoke'])->name('about');
    Route::get('/contact', [ContactController::class, '__invoke'])->name('contact');
});

Route::group(['namespace' => 'Account', 'prefix' => 'account', 'middleware' => ['auth', 'verified']], function () {
    Route::get('/', [AccountController::class, '__invoke'])->name('account');

    Route::group(['namespace' => 'Like'], function () {
        Route::get('/likes', [LikeController::class, '__invoke'])->name('account.like.index');
    });

    Route::group(['namespace' => 'Comment'], function () {
        Route::get('/comments', [CommentController::class, '__invoke'])->name('account.comment.index');
    });
});

Route::group(['namespace' => 'Admin', 'prefix' => 'admin', 'middleware' => ['auth','admin', 'verified']], function () {
    Route::get('/', [AdminController::class, '__invoke'])->name('admin');

    Route::group(['namespace' => 'User'], function () {
        Route::get('/user', [UserController::class, '__invoke'])->name('admin.user.index');
        Route::get('/user/create', [UserCreateController::class, '__invoke'])->name('admin.user.create');
        Route::post('/user', [UserStoreController::class, '__invoke'])->name('admin.user.store');
        Route::get('/user/{user}', [UserShowController::class, '__invoke'])->name('admin.user.show');
        Route::get('/user/{user}/edit', [UserEditController::class, '__invoke'])->name('admin.user.edit');
        Route::patch('/user/{user}', [UserUpdateController::class, '__invoke'])->name('admin.user.update');
        Route::delete('/user/{user}', [UserDestroyController::class, '__invoke'])->name('admin.user.delete');
    });

    Route::group(['namespace' => 'Post'], function () {
        Route::get('/post', [PostController::class, '__invoke'])->name('admin.post.index');
        Route::get('/post/create', [PostCreateController::class, '__invoke'])->name('admin.post.create');
        Route::post('/post', [PostStoreController::class, '__invoke'])->name('admin.post.store');
        Route::get('/post/{post}', [PostShowController::class, '__invoke'])->name('admin.post.show');
        Route::get('/post/{post}/edit', [PostEditController::class, '__invoke'])->name('admin.post.edit');
        Route::patch('/post/{post}', [PostUpdateController::class, '__invoke'])->name('admin.post.update');
        Route::delete('/post/{post}', [PostDestroyController::class, '__invoke'])->name('admin.post.delete');
    });

    Route::group(['namespace' => 'Category'], function () {
        Route::get('/category', [CategoryController::class, '__invoke'])->name('admin.category.index');
        Route::get('/category/create', [CategoryCreateController::class, '__invoke'])->name('admin.category.create');
        Route::post('/category', [CategoryStoreController::class, '__invoke'])->name('admin.category.store');
        Route::get('/category/{category}', [CategoryShowController::class, '__invoke'])->name('admin.category.show');
        Route::get('/category/{category}/edit', [CategoryEditController::class, '__invoke'])->name('admin.category.edit');
        Route::patch('/category/{category}', [CategoryUpdateController::class, '__invoke'])->name('admin.category.update');
        Route::delete('/category/{category}', [CategoryDestroyController::class, '__invoke'])->name('admin.category.delete');
    });
});
