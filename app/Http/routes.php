<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
<<<<<<< HEAD
    Route::get('/', 'HomeController@index');
    Route::post('/insert', 'HomeController@store');
});


=======
    Route::get('/', 'InvitationController@index');
    Route::post('/insert', 'InvitationController@store');
});

Route::group(['middleware' => 'web'], function () {
    Route::auth();
    Route::get('/admin', 'AdminController@index');
    Route::get('/admin/export/excel', 'AdminController@export');
    Route::delete('admin/delete/{id}', 'AdminController@destroy');
});
>>>>>>> Commit admin functions
