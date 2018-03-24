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
Route::get('','Admin\IndexController@index');
Route::get('demo','Admin\DemoController@index');

Route::group(['prefix' => 'admin','namespace' => 'Admin'],function(){

	Route::get('','IndexController@index');
	Route::get('demo','IndexController@demo');
	Route::get('aaa','IndexController@aaa');


	Route::group(['prefix' => 'sysconfig'],function(){


        Route::get('index','SysConfigController@index');
		Route::get('system','SysConfigController@system');
		Route::get('api','SysConfigController@api');
		Route::get('demo','SysConfigController@demo');
		Route::get('','');

	});

	Route::group(['prefix' => 'user'],function(){

		Route::get('index','UserController@index');
		Route::get('edit','UserController@edit');
		Route::get('demo','UserController@demo');

	});

	Route::group(['prefix' => 'role'],function(){

		Route::get('','RoleController@index');
		Route::get('index','RoleController@index');
		Route::get('edit','RoleController@edit');
		Route::get('demo','RoleController@demo');

	});

	Route::group(['prefix' => 'article'],function(){

		Route::get('','ArticleController@index');
		Route::get('index','ArticleController@index');
		Route::get('add','ArticleController@add');

		Route::get('edit','ArticleController@edit');
		Route::get('demo','ArticleController@demo');

	});


});














