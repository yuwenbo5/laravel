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

Route::group(['middleware' => ['web']], function(){

    Route::any('login',['uses' => 'AdminController@login']);
    Route::get('logout',['uses' => 'AdminController@logout']);

    Route::group(['middleware' => 'admin'], function(){
        Route::get('index',['uses' => 'AdminController@index']);

        Route::get('product/list',['uses' => 'ProductController@index']);
        Route::get('product/add',['uses' => 'ProductController@add']);
        Route::get('product/detail',['uses' => 'ProductController@detail']);
        Route::get('product/recycle',['uses' => 'ProductController@recycle']);

    });

});

