<?php

Route::get('/', ['as' => 'home.index', 'uses' => 'App\Http\Controllers\HomeController@index']);

/**
 * Project routes
 */
Route::model('project', 'App\Models\Project');

Route::get('project', ['as' => 'project.index', 'uses' => 'App\Http\Controllers\ProjectController@index']);
Route::get('project/create', ['as' => 'project.create', 'uses' => 'App\Http\Controllers\ProjectController@create'], ['middleware' => 'admin']);
Route::post('project', ['as' => 'project.store', 'uses' => 'App\Http\Controllers\ProjectController@store'], ['middleware' => 'admin']);
Route::get('project/{project}', ['as' => 'project.show', 'uses' => 'App\Http\Controllers\ProjectController@show']);
Route::get('project/{project}/edit', ['as' => 'project.edit', 'uses' => 'App\Http\Controllers\ProjectController@edit'], ['middleware' => 'admin']);
Route::patch('project/{project}', ['as' => 'project.update', 'uses' => 'App\Http\Controllers\ProjectController@update'], ['middleware' => 'admin']);
Route::delete('project/{project}', ['as' => 'project.destroy', 'uses' => 'App\Http\Controllers\ProjectController@destroy'], ['middleware' => 'admin']);

