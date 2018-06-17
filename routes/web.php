<?php

/*
|--------------------------------------------------------------------------
| Non-Auth Routes - Public Access
|--------------------------------------------------------------------------
*/
Route::get('/', 'FrontController@home');
Route::get('/blog', 'FrontController@blog')->name('blog');
Route::get('/blog/{Slug}', 'FrontController@article')->name('blog.article');

/*
|--------------------------------------------------------------------------
| Auth Routes - User Authentication Needed
|--------------------------------------------------------------------------
*/
Auth::routes();
Route::get('/dashboard', 'FrontController@dashboard')->name('dashboard');

/*
|--------------------------------------------------------------------------
| General Admin Page - Protected by admin middleware in AdminController
|--------------------------------------------------------------------------
*/
Route::get('/admin', 'AdminController@admin')->name('admin');

/*
|--------------------------------------------------------------------------
| Post Admin - Protected by admin middleware in PostController
|--------------------------------------------------------------------------
*/
Route::prefix('admin')->group(function () {
    Route::get('/post/create-post', 'PostController@create')->name('post.create');
	Route::post('/post/post.store', 'PostController@store')->name('post.store');
	Route::get('/post/post-index', 'PostController@index')->name('post.index');
	Route::get('/post/edit/{id}', 'PostController@edit')->name('post.edit');
	Route::post('/post/update/{id}', 'PostController@update')->name('post.update');
	Route::get('/post/delete/{id}', 'PostController@destroy')->name('post.delete');
});


