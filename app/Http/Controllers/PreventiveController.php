<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Validator;
use App\Models\Preventive;

use App\Models\Tenant;
use App\Models\Equipment;
use App\Models\Department;
use App\Models\Frequency;
use App\Models\Location;
use App\Models\Manufacturer;
use App\Models\Category;
use App\Models\Supplier;
use App\Models\Condition;
use App\Models\Utilization;
use App\Models\Status;
use App\Models\WorkType;
use App\Models\WorkStatus;
use App\Models\RequestType;

class PreventiveController extends Controller
{
    public function index() 
    {
    	$preventives = new Preventive();

    	return view('vendor.adminlte.preventive.index')
            ->with('preventives', $preventives->all());
    }

    public function getAddView() 
    {
        $equipments = new Equipment();
        $work_types = new WorkType();
        $work_statuses = new WorkStatus();
        $departments = new Department();
        $request_types = new RequestType();
        $statuses = new Status();
        $tenants = new Tenant();
        $conditions = new Condition();
        $utilizations = new Utilization();

    	return view('vendor.adminlte.preventive.add')
            ->with('equipments', $equipments->all())
            ->with('work_types', $work_types->all())
            ->with('work_statuses', $work_statuses->all())
            ->with('departments', $departments->all())
            ->with('request_types', $request_types->all())
            ->with('statuses', $statuses->all())
            ->with('tenants', $tenants->all())
            ->with('conditions', $conditions->all())
            ->with('utilizations', $utilizations->all());

    }

    public function postAddView(Request $request) 
    {
    	$validator = Validator::make($request->all(), [
            'equipment_description' => 'required|unique:correctives|max:50',
            'equipment_name' => 'required|unique:correctives|max:100',
        ]);

        if ($validator->fails()) {
            return redirect()->action('PreventiveController@getAddView')
                        ->withErrors($validator)
                        ->withInput();
        }

    	$equipment = new Preventive();

        $equipment->equipment_name = $request->input('equipment_name');
        $equipment->equipment_description = $request->input('equipment_description');
        $equipment->model = $request->input('model');
        $equipment->barcode = $request->input('barcode');
        $equipment->serial_number = $request->input('serial_number');
        $equipment->asset_number = $request->input('asset_number');
        $equipment->service_group = $request->input('service_group');
        $equipment->required_pm = $request->input('required_pm');
        $equipment->service_provider = $request->input('service_provider');
        $equipment->availability = $request->input('availability');
        $equipment->department_id = $request->input('department_id');
        $equipment->frequency_id = $request->input('frequency_id');
        $equipment->location_id = $request->input('location_id');
        $equipment->manufacturer_id = $request->input('manufacturer_id');
        $equipment->category_id = $request->input('category_id');
        $equipment->supplier_id = $request->input('supplier_id');
        $equipment->condition_status_id = $request->input('condition_status_id');
        $equipment->utilization_id = $request->input('utilization_id');
        $equipment->status_id = $request->input('status_id');
        $equipment->tenant_id = $request->input('tenant_id');

    	$equipment->save();

    	return redirect()->action('PreventiveController@index');
    }

    public function getEditView($id) 
    {
        $tenants = new Tenant();
        $departments = new Department();
        $frequencies = new Frequency();
        $locations = new Location();
        $manufacturers = new Manufacturer();
        $categories = new Category();
        $suppliers = new Supplier();
        $conditions = new Condition();
        $utilizations = new Utilization();
        $statuses = new Status();

        $equipment = Preventive::find($id);

    	return view('vendor.adminlte.preventive.edit')
                    ->with('equipment', $equipment)
                    ->with('tenants', $tenants->all())
                    ->with('frequency', $frequencies->all())
                    ->with('locations', $locations->all())
                    ->with('manufacturers', $manufacturers->all())
                    ->with('categories', $categories->all())
                    ->with('suppliers', $suppliers->all())
                    ->with('conditions', $conditions->all())
                    ->with('utilizations', $utilizations->all())
                    ->with('statuses', $statuses->all())
                    ->with('departments', $departments->all());

    }

    public function postEditView(Request $request) 
    {
        $validator = Validator::make($request->all(), [
            'equipment_description' => 'required|max:50|unique:correctives,id,' . $request->input('id'),
            'equipment_name' => 'required|max:100|unique:correctives,id,'. $request->input('id'),
        ]);

        if ($validator->fails()) {

            return redirect()->back()
                             ->withErrors($validator)
                             ->withInput($request->all());
        }

    	$equipment = Preventive::find($request->input('id'));

        $equipment->equipment_name = $request->input('equipment_name');
        $equipment->equipment_description = $request->input('equipment_description');
        $equipment->model = $request->input('model');
        $equipment->barcode = $request->input('barcode');
        $equipment->serial_number = $request->input('serial_number');
        $equipment->asset_number = $request->input('asset_number');
        $equipment->service_group = $request->input('service_group');
        $equipment->required_pm = $request->input('required_pm');
        $equipment->service_provider = $request->input('service_provider');
        $equipment->availability = $request->input('availability');
        $equipment->department_id = $request->input('department_id');
        $equipment->frequency_id = $request->input('frequency_id');
        $equipment->location_id = $request->input('location_id');
        $equipment->manufacturer_id = $request->input('manufacturer_id');
        $equipment->category_id = $request->input('category_id');
        $equipment->supplier_id = $request->input('supplier_id');
        $equipment->condition_status_id = $request->input('condition_status_id');
        $equipment->utilization_id = $request->input('utilization_id');
        $equipment->status_id = $request->input('status_id');
        $equipment->tenant_id = $request->input('tenant_id');

    	$equipment->update();

    	return redirect()->action('PreventiveController@index');
    }

    public function getDeleteView($id) 
    {
    	$equipment = Preventive::find($id);

    	return view('vendor.adminlte.preventive.delete', [ 'equipment' => $equipment ]);
    }

    public function postDeleteView(Request $request) 
    {
    	$equipment = Preventive::find($request->input('id'));

    	$equipment->delete();

    	return redirect()->action('PreventiveController@index');
    }
}
