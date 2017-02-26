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

Route::get('/', [
    'uses' => 'FrontendController@frontend',
    'as' => 'frontend',
    'middleware' => config('asgard.page.config.middleware'),
    'namespace' => 'Modules\Core\Http\Controllers'
]);

Route::any('{uri}', [
    'uses' => 'PublicController@uri',
    'as' => 'page',
    'middleware' => config('asgard.page.config.middleware'),
]);


