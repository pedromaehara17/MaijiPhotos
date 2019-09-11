<?php


Auth::routes();


Route::get('/', 'HomeController@index');

Route::get('/home', 'HomeController@home');


Route::get('/posts','PostsController@index')->name('verPosts');

Route::get('/posts/create','PostsController@create')->name('criarPost');

Route::post('/posts','PostsController@store');

Route::get('/like','PostsController@like')->name('like');

Route::get('/dislike','PostsController@dislike')->name('dislike');

Route::post('/comment/{id}', 'CommentController@comment');

Route::get('/comment/delete/{id}', 'CommentController@delete');

Route::resource('notifications', 'NotificationController');