<?php

Route::auth();
Route::group(['middleware' => ['web']], function () {
    
	Route::get('/', 'HomePageController@showHomePage');
	Route::get('/home', 'HomePageController@showHomePage');
	Route::get('/SignIn', 'SignInController@SignInPage');
	Route::get('/RoomReservation', 'RoomReservationController@RoomReservationPage');

	
	Route::get('/Store', 'StoreController@StorePage');
	

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


<<<<<<< HEAD

=======
>>>>>>> 9694bd9536eb83be9df91327bebf2a2f3df2bf8b
