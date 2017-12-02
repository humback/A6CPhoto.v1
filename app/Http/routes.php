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

$router->post('public/Modules/A6C/Photo/{imagename}','ModuleA6CController@postPhoto');
$router->get('public/Modules/A6C/{imagename}','ModuleA6CController@getPhoto');