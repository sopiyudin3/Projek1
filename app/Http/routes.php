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
//Route::controller('collection','CollectionController');

Route::get('/', function () {
    return view('welcome');
});

Route::auth();
Route::get('/home', 'HomeController@index');
Route::get('/admin', 'dashboardController@index');
Route::resource('users', 'userController');
Route::get('cari', 'userController@search');

/*Route::get('/users', function(){

	$data = App\User::all();
	foreach ($data as $list){
		echo $list->name;
		foreach ($list->relasiAlamat as $try){
		print_r($try); die;
			echo $try->alamat_rumah;
		}
	}
});*/

//Route::get('users', 'RelasiController@relasi');
Route::get('users/{name}', 'RelasiController@relasi');


