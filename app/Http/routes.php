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

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::group(['before' => 'auth'], function()
{	
	Route::get('/', 'PagesController@index');

	Route::get('home', 'HomeController@index');

	# Works
	Route::get('products/{products}/activate', ['as' => 'products.activate', 'uses' => 'ProductsController@activate']);
	Route::get('products/{products}/deactivate', ['as' => 'products.deactivate', 'uses' => 'ProductsController@deactivate']);
	Route::resource('products', 'ProductsController', ['except' => ['destroy']]);

	# Types
	Route::get('types/{types}/activate', ['as' => 'types.activate', 'uses' => 'TypesController@activate']);
	Route::get('types/{types}/deactivate', ['as' => 'types.deactivate', 'uses' => 'TypesController@deactivate']);
	Route::resource('types', 'TypesController', ['except' => ['destroy']]);

	# Categories
	Route::get('categories/{categories}/activate', ['as' => 'categories.activate', 'uses' => 'CategoriesController@activate']);
	Route::get('categories/{categories}/deactivate', ['as' => 'categories.deactivate', 'uses' => 'CategoriesController@deactivate']);
	Route::resource('categories', 'CategoriesController', ['except' => ['destroy']]);

	# Article
	Route::get('articles/{articles}/activate', ['as' => 'articles.activate', 'uses' => 'ArticlesController@activate']);
	Route::get('articles/{articles}/deactivate', ['as' => 'articles.deactivate', 'uses' => 'ArticlesController@deactivate']);
	Route::resource('articles', 'ArticlesController', ['except' => ['destroy']]);
});

Route::get('images/{image}', function($image)
{
	$filepath = storage_path() . '/images/' . $image;
	return Response::download($filepath);
});