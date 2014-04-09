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


/*
*
* User Controller
*
*/

// route to show the login form
Route::get('/', 'UserController@getIndex');

// route to process the login form
Route::post('/login', 'UserController@postLogin');

// user dashboard
Route::get('dashboard', 'UserController@getDashboard');

// logout user
Route::get('logout', 'UserController@logout');


/*
*
* Volunteer Controller
*
*/

// route to show the volunteer signup form
Route::get('signup', 'VolunteerController@getSignup');

// route to process the signup form
Route::post('signup', 'VolunteerController@postSignup');







/*

Event::listen('404', function() {
return Response::error('404');
});
Event::listen('laravel.query', function($sql) {
var_dump($sql);
});
//All Controllers
Route:controller(Controller:detect());
*/