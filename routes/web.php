<?php

use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/post/{post}', [App\Http\Controllers\PostController::class, 'show'])->name('post');



Route::middleware('auth')->group(function(){

	Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin.index');

	Route::post('/admin/post', [App\Http\Controllers\PostController::class, 'store'])->name('post.store');

	Route::get('/admin/post/create', [App\Http\Controllers\PostController::class, 'create'])->name('post.create');

});