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

	// ------------------------ CATEGORIES ------------------------- //

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

	//  FREQUENCIES Routes 
	Route::get('/frequencies', 'FrequencyController@index');
	Route::get('/frequency/add', 'FrequencyController@getAddView');
	Route::post('/frequency/add', 'FrequencyController@postAddView');
	Route::get('/frequency/edit/{id}', 'FrequencyController@getEditView');
	Route::post('/frequency/update', 'FrequencyController@postEditView');
	Route::get('/frequency/delete/{id}', 'FrequencyController@getDeleteView');
	Route::post('/frequency/delete', 'FrequencyController@postDeleteView');

	//  STATUS's Routes 
	Route::get('/statuses', 'StatusController@index');
	Route::get('/status/add', 'StatusController@getAddView');
	Route::post('/status/add', 'StatusController@postAddView');
	Route::get('/status/edit/{id}', 'StatusController@getEditView');
	Route::post('/status/update', 'StatusController@postEditView');
	Route::get('/status/delete/{id}', 'StatusController@getDeleteView');
	Route::post('/status/delete', 'StatusController@postDeleteView');

	//  REQUEST TYPES Routes 
	Route::get('/requests', 'RequestTypeController@index');
	Route::get('/request/add', 'RequestTypeController@getAddView');
	Route::post('/request/add', 'RequestTypeController@postAddView');
	Route::get('/request/edit/{id}', 'RequestTypeController@getEditView');
	Route::post('/request/update', 'RequestTypeController@postEditView');
	Route::get('/request/delete/{id}', 'RequestTypeController@getDeleteView');
	Route::post('/request/delete', 'RequestTypeController@postDeleteView');

	//  UTILIZATIONS Routes 
	Route::get('/utilizations', 'UtilizationController@index');
	Route::get('/utilization/add', 'UtilizationController@getAddView');
	Route::post('/utilization/add', 'UtilizationController@postAddView');
	Route::get('/utilization/edit/{id}', 'UtilizationController@getEditView');
	Route::post('/utilization/update', 'UtilizationController@postEditView');
	Route::get('/utilization/delete/{id}', 'UtilizationController@getDeleteView');
	Route::post('/utilization/delete', 'UtilizationController@postDeleteView');

	//  CONDITIONS Routes 
	Route::get('/conditions', 'ConditionController@index');
	Route::get('/condition/add', 'ConditionController@getAddView');
	Route::post('/condition/add', 'ConditionController@postAddView');
	Route::get('/condition/edit/{id}', 'ConditionController@getEditView');
	Route::post('/condition/update', 'ConditionController@postEditView');
	Route::get('/condition/delete/{id}', 'ConditionController@getDeleteView');
	Route::post('/condition/delete', 'ConditionController@postDeleteView');

	//  WORK STATUS Routes 
	Route::get('/work_statuses', 'WorkStatusController@index');
	Route::get('/work_status/add', 'WorkStatusController@getAddView');
	Route::post('/work_status/add', 'WorkStatusController@postAddView');
	Route::get('/work_status/edit/{id}', 'WorkStatusController@getEditView');
	Route::post('/work_status/update', 'WorkStatusController@postEditView');
	Route::get('/work_status/delete/{id}', 'WorkStatusController@getDeleteView');
	Route::post('/work_status/delete', 'WorkStatusController@postDeleteView');

	//  WORK TYPE Routes 
	Route::get('/work_types', 'WorkTypeController@index');
	Route::get('/work_type/add', 'WorkTypeController@getAddView');
	Route::post('/work_type/add', 'WorkTypeController@postAddView');
	Route::get('/work_type/edit/{id}', 'WorkTypeController@getEditView');
	Route::post('/work_type/update', 'WorkTypeController@postEditView');
	Route::get('/work_type/delete/{id}', 'WorkTypeController@getDeleteView');
	Route::post('/work_type/delete', 'WorkTypeController@postDeleteView');

	// ------------------------ INTERNAL RECORDS------------------------- //

	//  TENANTS Routes 
	Route::get('/tenants', 'TenantController@index');
	Route::get('/tenant/add', 'TenantController@getAddView');
	Route::post('/tenant/add', 'TenantController@postAddView');
	Route::get('/tenant/edit/{id}', 'TenantController@getEditView');
	Route::post('/tenant/update', 'TenantController@postEditView');
	Route::get('/tenant/delete/{id}', 'TenantController@getDeleteView');
	Route::post('/tenant/delete', 'TenantController@postDeleteView');

	//  LOCALTIONS Routes 
	Route::get('/locations', 'LocationController@index');
	Route::get('/location/add', 'LocationController@getAddView');
	Route::post('/location/add', 'LocationController@postAddView');
	Route::get('/location/edit/{id}', 'LocationController@getEditView');
	Route::post('/location/update', 'LocationController@postEditView');
	Route::get('/location/delete/{id}', 'LocationController@getDeleteView');
	Route::post('/location/delete', 'LocationController@postDeleteView');

	//  MANUFACTURERS Routes 
	Route::get('/manufacturers', 'ManufacturerController@index');
	Route::get('/manufacturer/add', 'ManufacturerController@getAddView');
	Route::post('/manufacturer/add', 'ManufacturerController@postAddView');
	Route::get('/manufacturer/edit/{id}', 'ManufacturerController@getEditView');
	Route::post('/manufacturer/update', 'ManufacturerController@postEditView');
	Route::get('/manufacturer/delete/{id}', 'ManufacturerController@getDeleteView');
	Route::post('/manufacturer/delete', 'ManufacturerController@postDeleteView');

	//  SUPPLIERS Routes 
	Route::get('/suppliers', 'SupplierController@index');
	Route::get('/supplier/add', 'SupplierController@getAddView');
	Route::post('/supplier/add', 'SupplierController@postAddView');
	Route::get('/supplier/edit/{id}', 'SupplierController@getEditView');
	Route::post('/supplier/update', 'SupplierController@postEditView');
	Route::get('/supplier/delete/{id}', 'SupplierController@getDeleteView');
	Route::post('/supplier/delete', 'SupplierController@postDeleteView');

	//  DEPARTMENTS Routes 
	Route::get('/departments', 'DepartmentController@index');
	Route::get('/department/add', 'DepartmentController@getAddView');
	Route::post('/department/add', 'DepartmentController@postAddView');
	Route::get('/department/edit/{id}', 'DepartmentController@getEditView');
	Route::post('/department/update', 'DepartmentController@postEditView');
	Route::get('/department/delete/{id}', 'DepartmentController@getDeleteView');
	Route::post('/department/delete', 'DepartmentController@postDeleteView');


	//  EQUIPMENTS Routes 
	Route::get('/equipments', 'EquipmentController@index');
	Route::get('/equipment/add', 'EquipmentController@getAddView');
	Route::post('/equipment/add', 'EquipmentController@postAddView');
	Route::get('/equipment/edit/{id}', 'EquipmentController@getEditView');
	Route::post('/equipment/update', 'EquipmentController@postEditView');
	Route::get('/equipment/delete/{id}', 'EquipmentController@getDeleteView');
	Route::post('/equipment/delete', 'EquipmentController@postDeleteView');

	//  CATEGORIES Routes 
	Route::get('/categories', 'CategoryController@index');
	Route::get('/category/add', 'CategoryController@getAddView');
	Route::post('/category/add', 'CategoryController@postAddView');
	Route::get('/category/edit/{id}', 'CategoryController@getEditView');
	Route::post('/category/update', 'CategoryController@postEditView');
	Route::get('/category/delete/{id}', 'CategoryController@getDeleteView');
	Route::post('/category/delete', 'CategoryController@postDeleteView');

	
	// ------------------------ MANAGE USER ACCOUNTS ------------------------- //

	Route::group(['middleware' => 'admin'], function () {
		
		// Only SUPER_ADMIN can make any request on this routes

		Route::get('/accounts', 'AccountController@index');
		Route::get('/account/add', 'AccountController@getAddView');
		Route::post('/account/add', 'AccountController@postAddView');
		Route::get('/account/edit/{id}', 'AccountController@getEditView');
		Route::post('/account/update', 'AccountController@postEditView');
		Route::get('/account/delete/{id}', 'AccountController@getDeleteView');
		Route::post('/account/delete', 'AccountController@postDeleteView');

	});

	// Route::post('/signout', 'HomeController@signout');

	// ------------------------ ROUTES UNDER CONSTUCTION ------------------------- //

	Route::get('preventive', 'HomeController@blankPage');
	Route::get('corrective', 'HomeController@blankPage');
	Route::get('purchases', 'HomeController@blankPage');
	Route::get('cma', 'HomeController@blankPage');
	Route::get('ppma', 'HomeController@blankPage');
	Route::get('analysis', 'HomeController@blankPage');
	Route::get('employee', 'HomeController@blankPage');
	Route::get('category', 'HomeController@blankPage');
	Route::get('specifications', 'HomeController@blankPage');

    //Please do not remove this if you want adminlte:route and adminlte:link commands to works correctly.
    #adminlte_routes
});


