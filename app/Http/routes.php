<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

$router->get('/', 'HomeController@index');

/*
|--------------------------------------------------------------------------
| Authentication & Password Reset Controllers
|--------------------------------------------------------------------------
|
| These two controllers handle the authentication of the users of your
| application, as well as the functions necessary for resetting the
| passwords for your users. You may modify or remove these files.
|
*/

$router->controller('auth', 'AuthController');
$router->controller('password', 'PasswordController');

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