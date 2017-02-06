<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Validator;
use App\Models\Equipment;
use App\Models\Tenant;

class EquipmentController extends Controller
{
    public function index() 
    {
    	$equipments = new Equipment();

    	return view('vendor.adminlte.equipments.index')

            ->with('equipments', $equipments->all());
    }

    public function getAddView() 
    {
        $tenants = new Tenant();

    	return view('vendor.adminlte.equipments.add')
            ->with('tenants', $tenants->all());
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
