<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Validator;
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

class EquipmentController extends Controller
{
    public function index() 
    {
    	$equipments = new Equipment();
        $departments = new Department();

    	return view('vendor.adminlte.equipments.index')
            ->with('equipments', $equipments->all())
            ->with('departments', $departments->all());
    }

    public function getAddView() 
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

    	return view('vendor.adminlte.equipments.add')
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

    public function postAddView(Request $request) 
    {
    	$validator = Validator::make($request->all(), [
            'code' => 'required|unique:equipments|max:50',
            'name' => 'required|unique:equipments|max:100',
        ]);

        if ($validator->fails()) {
            return redirect()->action('EquipmentController@getAddView')
                        ->withErrors($validator)
                        ->withInput();
        }

    	$equipment = new Equipment();

        $equipment->code = $request->input('code');
        $equipment->name = $request->input('name');
        $equipment->section = $request->input('section');
        $equipment->building = $request->input('building');
        $equipment->building_number = $request->input('building_number');
        $equipment->building_floor = $request->input('building_floor');
        $equipment->building_address = $request->input('building_address'); 
        $equipment->tenant_id = $request->input('tenant_id');

    	$equipment->save();

    	return redirect()->action('EquipmentController@index');
    }

    public function getEditView($id) 
    {
        $equipment = Equipment::find($id);
        $tenants = new Tenant();

    	return view('vendor.adminlte.equipments.edit', [ 'equipment' => $equipment, 'tenants'=> $tenants->all()]);
    }

    public function postEditView(Request $request) 
    {
        $validator = Validator::make($request->all(), [
            'code' => 'required|max:50|unique:equipments,id,' . $request->input('id'),
            'name' => 'required|max:100|unique:equipments,id,'. $request->input('id'),
        ]);

        if ($validator->fails()) {

            return redirect()->back()
                             ->withErrors($validator)
                             ->withInput($request->all());
        }

    	$equipment = Equipment::find($request->input('id'));

        $equipment->code = $request->input('code');
        $equipment->name = $request->input('name');
        $equipment->section = $request->input('section');
        $equipment->building = $request->input('building');
        $equipment->building_number = $request->input('building_number');
        $equipment->building_floor = $request->input('building_floor');
        $equipment->building_address = $request->input('building_address');
        $equipment->tenant_id = $request->input('tenant_id');
        
    	$equipment->update();

    	return redirect()->action('EquipmentController@index');
    }

    public function getDeleteView($id) 
    {
    	$equipment = Equipment::find($id);

    	return view('vendor.adminlte.equipments.delete', [ 'equipment' => $equipment ]);
    }

    public function postDeleteView(Request $request) 
    {
    	$equipment = Equipment::find($request->input('id'));

    	$equipment->delete();

    	return redirect()->action('EquipmentController@index');
    }
}
