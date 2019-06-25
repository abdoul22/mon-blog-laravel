<?php

Route::get('/', 'PageController@index');
Route::get('index', 'PageController@index');
Route::get('about', 'PageController@about');
Route::get('services', 'PageController@services');

// posts routes

Route::get('/posts','PostsController@index')->name('posts.index');

Route::get('/posts/create','PostsController@create')->name('posts.create');
Route::post('/posts','PostsController@store')->name('posts.store');
Route::get('/posts/{id}','PostsController@show')->name('posts.show');

Route::get('/posts/{id}/edit','PostsController@edit')->name('posts.edit');
Route::put('/posts/{id}','PostsController@update')->name('posts.update');

//post destroy
Route::delete('/posts/{id}','PostsController@destroy')->name('posts.destroy');


Route::get('/posts/{id}/{author}', function ($id,$author) {
    return "The post id is ".$id. " this compt owner " . $author ;
});
Auth::routes();

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
