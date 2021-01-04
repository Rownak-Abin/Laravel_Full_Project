<?php



Route::get('/home', 'homeController@index');
Route::get('/tours', 'homeController@alltours');
Route::get('/hotels', 'hotelController@allhotels');

Route::get('/search', 'LiveSearch@search');
Route::get('/searchHotel', 'HotelSearch@hotsearch');

Route::get('/details/{id}', 'homeController@details');
Route::post('/details/{id}', 'homeController@request');

Route::get('/hoteldetail/{id}', 'hotelController@Hotdetails');
Route::post('/hoteldetail/{id}', 'hotelController@hotelReq');



Route::get('/login', 'clientController@login');


Route::post('/login', 'clientController@getlog');
Route::get('/logout', 'logoutController@index');



Route::group(['middleware'=>['check']], function(){

		Route::get('/pdf/{id}', 'clientController@pdf');
		Route::post('/rate', 'clientController@rate');
		Route::get('/login/{id}', 'clientController@loginId')->name('login.loginId');

		Route::get('/profile', 'profileController@index')->name('pro');
		Route::get('/editProfile/{id}', 'profileController@edit');
		Route::post('/editProfile/{id}', 'profileController@update');

		Route::get('/reg', 'regController@index');
		Route::post('/reg', 'regController@store');

		Route::get('/packages', 'packageController@index');

		Route::get('/addPackage', 'packageController@add');
		Route::post('/addPackage', 'packageController@save');

		Route::get('/packageDetails/{id}', 'packageController@details');

		Route::get('/deletePackage/{id}', 'packageController@delete');
		Route::get('/destroyPackage/{id}', 'packageController@destroy');

		Route::get('/modifyPackage/{id}', 'packageController@modify');
		Route::post('/modifyPackage/{id}', 'packageController@update');

		Route::get('/bookings', 'bookingController@index');

		Route::get('/approveBooking/{id}', 'bookingController@add');
		Route::get('/confirmBooking/{id}', 'bookingController@approve');

		Route::get('/removeBooking', 'bookingController@remove');
		Route::post('/removeBooking', 'bookingController@destroy');




	});	


