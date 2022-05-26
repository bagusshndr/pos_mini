<?php

use Illuminate\Http\Request;

Route::resource('users', 'API\UserController');
Route::resource('product', 'API\ProductController');
Route::resource('category', 'API\CategoryController');
