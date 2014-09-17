<?php

Route::get('/', 'HomeController@index');

Route::resource('posts', 'PostsController');
