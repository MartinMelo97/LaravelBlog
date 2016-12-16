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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'admin'], function(){

	Route::resource('users','UsersController');

	Route::get('users/{id}/destroy', [
			'uses' => 'UsersController@destroy',
			'as' => 'admin.users.destroy'
		]);

	Route::resource('categories','CategoriesController');
	Route::get('categories/{id}/destroy', [
		'uses'=>'CategoriesController@destroy',
		'as'=>'admin.categories.destroy'
		]);

	Route::resource('tags','TagsController');
	Route::get('tags/{id}/destroy', [
		'uses'=>'TagsController@destroy',
		'as'=>'admin.tags.destroy'
		]);

	Route::resource('articles','ArticlesController');
	Route::get('articles/{id}/destroy', [
		'uses'=>'ArticlesController@destroy',
		'as'=>'admin.articles.destroy'
		]);

	Route::get('login',[
		'uses'=>'Auth\AuthController@showLoginAdmin',
		'as' => 'admin.login'
		]);

	Route::post('login',[
		'uses'=>'Auth\AuthController@login',
		'as' => 'admin.login'
		]);

});


Route::auth();


Route::get('/home', 'HomeController@index');
