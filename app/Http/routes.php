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


//Route::get('/', 'HomePageController@showHomePage');
//Route::get('/home', 'HomePageController@showHomePage');
//Route::get('/SignIn', 'SignInController@SignInPage');
//Route::get('/RoomReservation', 'RoomReservationController@RoomReservationPage');
//Route::get('/SignUp', 'SignUpController@SignUpPage');
//Route::get('/Events', 'EventsController@EventsPage');

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
    
	Route::auth();
	Route::get('/', 'HomePageController@showHomePage');
	Route::get('/home', 'HomePageController@showHomePage');
	Route::get('/SignIn', 'SignInController@SignInPage');
	Route::get('/RoomReservation', 'RoomReservationController@RoomReservationPage');
	Route::post('/RoomReservation/add', 'RoomReservationController@add');
	Route::get('/home/basic', 'addMembershipController@basic');
	Route::get('/home/premium', 'addMembershipController@premium');
	Route::get('/home/pro', 'addMembershipController@pro');
	Route::get('/home/platinum', 'addMembershipController@platinum');
	Route::get('/Events/eventRegisterationController/{id}', 'eventRegisterationController@add');

	Route::get('/home/custom', 'addMembershipController@custom');
	Route::get('/SignUp', 'SignUpController@SignUpPage');
	Route::get('/Events/{eventId}', 'EventsController@EventsPage');


//Route::get('/home', 'HomeController@index');

});


