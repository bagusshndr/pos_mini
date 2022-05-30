<?php

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

// Route::get('/', function () {
//     return view('produk/index');
// });

Route::get('/', 'HomeController@index')->name('home.index');
Route::get('/product', 'Produk_Controller@index')->name('produk.index');
Route::get('/product/create', 'Produk_Controller@create')->name('produk.create');
// Route::get('/product/{id}', 'Produk_Controller@getById');
Route::post('/product', 'Produk_Controller@postRequest')->name('produk.store');
Route::delete('/product/{id}', 'Produk_Controller@deleteRequest')->name('produk.delete');
Route::get('/category', 'kategori_Controller@index')->name('category.index');
// Route::get('/product/create', 'Kategori_Controller@create')->name('category.create');
// Route::post('/product', 'Produk_Controller@index')->name('produk.create');
// Route::get('/product/create', 'Produk_Controller@index')->name('produk.create');

// Route::prefix('/produk')->group(function () {
//     Route::get('index', [ProjectController::class, 'index'])->name('index');
// });


// Route::resource('produk', Produk_Controller::class);
