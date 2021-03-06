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

Route::group(['prefix'=>'admin'], function(){

    Route::group(['prefix'=>'categories'], function(){
        Route::get('/', 'AdminCategoriesController@index');
    });

    Route::group(['prefix'=>'products'], function(){
        Route::get('/', 'AdminProductsController@index');
    });

});

Route::get('/', 'WelcomeController@index');
Route::get('exemplo', 'WelcomeController@exemplo');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
