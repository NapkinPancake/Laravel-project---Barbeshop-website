<?php

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

Route::get('/', 'pagesController@index');

Route::get('/test-item' , 'pagesController@test_item');

Route::get('/products-control' , 'pagesController@products_control');

Route::get('/forms-control' , 'pagesController@forms_control');

Route::get('/save_request', 'pagesController@save_request');

Route::resource('store', 'productController');

Route::resource('form', 'formController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


