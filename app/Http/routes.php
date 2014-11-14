<?php

Route::get('/', ['as' => 'home.index', 'uses' => 'App\Http\Controllers\HomeController@index']);

/**
 * Authentication
 */
Route::get('register', ['as' => 'register', 'uses' => 'App\Http\Controllers\Auth\AuthController@showRegistrationForm'], ['middleware' => 'guest']);
Route::post('register', ['as' => 'register.store', 'uses' => 'App\Http\Controllers\Auth\AuthController@store'], ['middleware' => 'guest']);

/**
 * Projects routes
 */
Route::model('project', 'App\Models\Project');

Route::get('project', ['as' => 'project.index', 'uses' => 'App\Http\Controllers\ProjectController@index']);
Route::get('project/create', ['as' => 'project.create', 'uses' => 'App\Http\Controllers\ProjectController@create'], ['middleware' => 'admin']);
Route::post('project', ['as' => 'project.store', 'uses' => 'App\Http\Controllers\ProjectController@store'], ['middleware' => 'admin']);
Route::get('project/{project}', ['as' => 'project.show', 'uses' => 'App\Http\Controllers\ProjectController@show']);
Route::get('project/{project}/edit', ['as' => 'project.edit', 'uses' => 'App\Http\Controllers\ProjectController@edit'], ['middleware' => 'admin']);
Route::patch('project/{project}', ['as' => 'project.update', 'uses' => 'App\Http\Controllers\ProjectController@update'], ['middleware' => 'admin']);
Route::delete('project/{project}', ['as' => 'project.destroy', 'uses' => 'App\Http\Controllers\ProjectController@destroy'], ['middleware' => 'admin']);

Route::get('project/{project}/categories', ['as' => 'project.categories', 'uses' => 'App\Http\Controllers\ProjectController@categories'], ['middleware' => 'admin']);
Route::patch('project/{project}/categories', ['as' => 'project.update_categories', 'uses' => 'App\Http\Controllers\ProjectController@update_categories'], ['middleware' => 'admin']);

/**
 * Categories routes
 */
Route::model('category', 'App\Models\Category');

Route::get('category', ['as' => 'category.index', 'uses' => 'App\Http\Controllers\CategoryController@index'], ['middleware' => 'admin']);
Route::get('category/create', ['as' => 'category.create', 'uses' => 'App\Http\Controllers\CategoryController@create'], ['middleware' => 'admin']);
Route::post('category', ['as' => 'category.store', 'uses' => 'App\Http\Controllers\CategoryController@store'], ['middleware' => 'admin']);
Route::get('category/{category}/edit', ['as' => 'category.edit', 'uses' => 'App\Http\Controllers\CategoryController@edit'], ['middleware' => 'admin']);
Route::patch('category/{category}', ['as' => 'category.update', 'uses' => 'App\Http\Controllers\CategoryController@update'], ['middleware' => 'admin']);
Route::delete('category/{category}', ['as' => 'category.destroy', 'uses' => 'App\Http\Controllers\CategoryController@destroy'], ['middleware' => 'admin']);
