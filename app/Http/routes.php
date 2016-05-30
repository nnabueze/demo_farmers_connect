<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
//frontend route
Route::get('/', 'FarmerController@index');
Route::get('/registeration', 'FarmerController@create');
Route::post('/registeration', 'FarmerController@store');
/*Route::get('register','RegisterController@show');
Route::post('register','RegisterController@login');
Route::get('register/user','RegisterController@create');
Route::post('register/user','RegisterController@store');
Route::get('register/contact','RegisterController@contact');
Route::post('register/contact','RegisterController@email');
Route::get('register/about','RegisterController@about');
Route::get('register/logout', 'RegisterController@logout');
Route::get('register/profile','RegisterController@profile');
Route::post('register/profile','RegisterController@profileUpdate');
Route::get('register/success','RegisterController@success');
Route::get('register/gallery','RegisterController@gallery');
Route::get('register/mbga','RegisterController@mbga');
*/
//Backend route
Route::resource('/user','UserController');
Route::resource('role','RoleController');
Route::get('admin','LoginController@index');
Route::post('admin','LoginController@store');
Route::get('/admin/dashboard','AdminController@index');
Route::get('/admin/logout','AdminController@logout');
Route::get('admin/users','AdminController@listUsers');
Route::get('admin/users/{any}','AdminController@show');

/*Route::resource('ercas', 'ErcasController');*/

Route::resource('farmers', 'farmerController');

Route::resource('farmers', 'FarmerController');