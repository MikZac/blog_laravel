<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\EditorController;
use App\Http\Controllers\AdminController;


Route::get('/', [HomeController::class, 'homepage'] );

route::get('/home', [HomeController::class,'index'])->middleware('auth')->name('home');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/post_page', [EditorController::class, 'post_page'] )->middleware('editor');
Route::post('/add_post', [EditorController::class, 'add_post'] )->middleware('editor');

Route::get('/show_post', [EditorController::class, 'show_post'] )->middleware('editor');
Route::get('/delete_post/{id}', [EditorController::class, 'delete_post'] )->middleware('editor');

Route::get('/edit_post/{id}', [EditorController::class, 'edit_post'] )->middleware('editor');

Route::post('/update_post/{id}', [EditorController::class, 'update_post'] )->middleware('editor');

Route::get('/post_details/{id}', [HomeController::class, 'post_details'] );

Route::get('/create_post', [HomeController::class, 'create_post'] )->middleware('auth');
Route::post('/user_post', [HomeController::class, 'user_post'] )->middleware('auth');

Route::get('/my_post', [HomeController::class, 'my_post'] )->middleware('auth');
Route::get('/my_post_del/{id}', [HomeController::class, 'my_post_del'] )->middleware('auth');

Route::get('/post_update_page/{id}', [HomeController::class, 'post_update_page'] )->middleware('auth');
Route::post('/update_post_data/{id}', [HomeController::class, 'update_post_data'] )->middleware('auth');

Route::get('/accept_post/{id}', [EditorController::class, 'accept_post'] )->middleware('editor');
Route::get('/reject_post/{id}', [EditorController::class, 'reject_post'] )->middleware('editor');
Route::get('/blog', [HomeController::class, 'blog'] );


Route::get('/user_page', [AdminController::class, 'user_page'] )->middleware('admin');
Route::post('/add_user', [AdminController::class, 'add_user'] )->middleware('admin');
Route::get('/show_user', [AdminController::class, 'show_user'] )->middleware('admin');
Route::get('/delete_user/{id}', [AdminController::class, 'delete_user'] )->middleware('admin');
Route::post('/update_user_status/{id}', [AdminController::class, 'update_user_status'] )->middleware('admin');