<?php 

Route::get('/', function(){
	return view('admin.dashboard');
});

Route::resource('/users','UserController');
Route::resource('/suppliers','SupplierController');

Route::resource('/trucks','TruckController');




;


