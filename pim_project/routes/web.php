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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/add_attribute', 'AttributeController@get_attribute_form');
Route::post('/add_attribute', 'AttributeController@post_attribute_form');

Route::get('/add_attribute_group', 'AttributeGroupController@get_attribute_group_form');
Route::post('/add_attribute_group', 'AttributeGroupController@post_attribute_group_form');

Route::get('/add_families', 'FamiliesController@get_family_form');
Route::post('/add_families', 'FamiliesController@post_family_form');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
