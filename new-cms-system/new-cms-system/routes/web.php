<?php

use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/post/{post}', 'PostController@show')->name('post');


Route::middleware('auth')->group(function(){

    Route::get('/admin', 'AdminsController@index')->name('admin.index');

    Route::get('/admin/posts', 'PostController@index')->name('post.index');
    Route::get('/admin/posts/create', 'PostController@create')->name('post.create');
    Route::post('/admin/posts', 'PostController@store')->name('post.store');


    Route::delete('/admin/posts/{post}/destroy', 'PostController@destroy')->name('post.destroy');
    Route::patch('/admin/posts/{post}/update', 'PostController@update')->name('post.update');
    Route::get('/admin/posts/{post}/edit', 'PostController@edit')->name('post.edit');


    Route::get('admin/users/{user}/profile', 'UserController@show')->name('user.profile.show');
    Route::put('admin/users/{user}/update', 'UserController@update')->name('user.profile.update');


    Route::delete('admin/users/{user}/destroy', 'UserController@destroy')->name('user.destroy');

});

Route::middleware(['role:admin','auth'])->group(function(){

    Route::get('admin/users', 'UserController@index')->name('users.index');
});




