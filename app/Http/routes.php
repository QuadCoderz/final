<?php
Route::auth();
Route::get('/', 'HomePageController@showHomePage');
Route::get('/home', 'HomePageController@showHomePage');
Route::get('/SignIn', 'SignInController@SignInPage');
Route::get('/RoomReservation', 'RoomReservationController@RoomReservationPage');
Route::get('/Store', 'StoreController@StorePage');
Route::get('/notify',function(){
	notify()->flash('Thank you '. Auth::user()->name,'success',[
		'text' => 'We will contact you soon',
		'type'=>'success']);
	return redirect()->to('/');
});

Route::post('/RoomReservation/add', 'RoomReservationController@add');
Route::get('/home/membership/{id}', 'addMembershipController@basic');
Route::get('/Events/eventRegisterationController/{id}', 'eventRegisterationController@add');
Route::get('/home/custom', 'addMembershipController@custom');
Route::get('/SignUp', 'SignUpController@SignUpPage');
Route::get('/Events/{eventId}', 'EventsController@EventsPage');
Route::get('Events', 'EventsController@thispage');
Route::post('/add', 'addEventController@add');
Route::get('/show', 'addEventController@d');
Route::get('/edit', 'addEventController@ret');//btgeb eldata mn eldb w tb3tha llview 3lshan yzhrha flform
Route::post('/update_event', 'addEventController@update');
Route::get('/delete_event/{id}', 'deleteEvent@go');
Route::get('/admin', 'adminController@adminPage');
Route::get('/view_events', 'view_events_admin@thisPage');
Route::get('/edit/{id}', 'addEventController@setId');
Route::get('/view_memberships', 'view_memberships_admin@thisPage');
Route::get('/setId/{id}', 'view_membership@setId');
Route::get('/view_membership', 'view_membership@prep');
Route::get('/delete_membership/{id}', 'delete_membership@del');
Route::get('/view_reg/{id}', 'show_event_res@setId');
Route::get('/view_regesterations', 'show_event_res@view');
Route::get('/delete_reg/{id}', 'delete_res@del');
Route::get('/view_room_res', 'show_room_res@go');
Route::get('/set/{id}', 'show_room_res@setId');
Route::get('/show_room_res', 'show_room_res@show');
Route::get('/delete_room_res/{id}', 'show_room_res@del');
Route::get('/delete_room_res_conf/{id}', 'show_room_res@del1');

Route::get('/confirm/{id}', 'confirm@room_con');
Route::get('/unconfirm/{id}', 'confirm@room_uncon');
Route::get('/confirm', 'confirm@room_conView');
Route::get('/view_req/{id}', 'confirm@mem_con');
Route::get('/unconf_mem/{id}', 'confirm@mem_uncon');
Route::get('/conf', 'confirm@mem_confView');
Route::post('/try', 'adminMainController@getData');
Route::get('/signOut', 'adminMainController@signOut');

//Route::get('/home', 'HomeController@index');


