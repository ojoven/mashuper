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

// Direct routes
Route::get('/', 'IndexController@index');
Route::get('/concepts', 'ConceptsController@index');
Route::get('mashups/view/{url_key}', 'MashupsController@view');

// Twitter login
Route::get('twitter/login', ['as'=>'twitter.login','uses' =>'TwitterController@login']);
Route::get('twitter/callback', ['as'=>'twitter.callback','uses' =>'TwitterController@callback']);
Route::get('twitter/error', 'TwitterController@error');
Route::get('twitter/logout', 'TwitterController@logout');

// Full Controllers
Route::controller('mashups', 'MashupsController');
Route::controller('concepts', 'ConceptsController');