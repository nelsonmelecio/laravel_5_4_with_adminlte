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

	//  CLASSIFICATION Routes 
	Route::get('/classifications', 'ClassificationController@index');
	Route::get('/classification/add', 'ClassificationController@getAddView');
	Route::post('/classification/add', 'ClassificationController@postAddView');
	Route::get('/classification/edit/{id}', 'ClassificationController@getEditView');
	Route::post('/classification/update', 'ClassificationController@postEditView');
	Route::get('/classification/delete/{id}', 'ClassificationController@getDeleteView');
	Route::post('/classification/delete', 'ClassificationController@postDeleteView');

	//  CRITICAL Routes 
	Route::get('/criticals', 'CriticalController@index');
	Route::get('/critical/add', 'CriticalController@getAddView');
	Route::post('/critical/add', 'CriticalController@postAddView');
	Route::get('/critical/edit/{id}', 'CriticalController@getEditView');
	Route::post('/critical/update', 'CriticalController@postEditView');
	Route::get('/critical/delete/{id}', 'CriticalController@getDeleteView');
	Route::post('/critical/delete', 'CriticalController@postDeleteView');

	//  PROFICIENCY Routes 
	Route::get('/proficiencies', 'ProficiencyController@index');
	Route::get('/proficiency/add', 'ProficiencyController@getAddView');
	Route::post('/proficiency/add', 'ProficiencyController@postAddView');
	Route::get('/proficiency/edit/{id}', 'ProficiencyController@getEditView');
	Route::post('/proficiency/update', 'ProficiencyController@postEditView');
	Route::get('/proficiency/delete/{id}', 'ProficiencyController@getDeleteView');
	Route::post('/proficiency/delete', 'ProficiencyController@postDeleteView');


    //Please do not remove this if you want adminlte:route and adminlte:link commands to works correctly.
    #adminlte_routes
});


