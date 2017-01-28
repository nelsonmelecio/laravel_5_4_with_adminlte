<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::post('/inquiry', 'InquiryController@inquiry');

Route::group(['middleware' => 'auth'], function () {


	//  RISK Routes 
	Route::get('/risks', 'RiskController@index');

	Route::get('/risk/add', 'RiskController@getAddRiskView');
	Route::post('/risk/add', 'RiskController@postAddRiskView');

	Route::get('/risk/edit/{id}', 'RiskController@getEditRiskView');
	Route::post('/risk/update', 'RiskController@postEditRiskView');

	Route::get('/risk/delete/{id}', 'RiskController@getDeleteRiskView');
	Route::post('/risk/delete', 'RiskController@postDeleteRiskView');



    //Please do not remove this if you want adminlte:route and adminlte:link commands to works correctly.
    #adminlte_routes
});


