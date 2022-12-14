<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\PostController;
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

Route::get('/', [PostController::class, 'index'])->name('posts.index');
Route::get('/create', [PostController::class, 'create'])->name('posts.create');
Route::get('/post/{post}', [PostController::class, 'show'])->name('posts.show');
Route::post('/store', [PostController::class, 'store'])->name('posts.store');
Route::post('/comments/store/{post}', [CommentController::class, 'store'])->name('posts.comments.store');
