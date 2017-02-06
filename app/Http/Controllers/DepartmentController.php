<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Validator;
use App\Models\Department;
use App\Models\Tenant;

class DepartmentController extends Controller
{
    public function index() 
    {
    	$departments = new Department();

    	return view('vendor.adminlte.departments.index')

            ->with('departments', $departments->all());
    }

    public function getAddView() 
    {
        $tenants = new Tenant();

    	return view('vendor.adminlte.departments.add')
            ->with('tenants', $tenants->all());
    }

    public function postAddView(Request $request) 
    {
    	$validator = Validator::make($request->all(), [
            'code' => 'required|unique:departments|max:50',
            'name' => 'required|unique:departments|max:100',
        ]);

        if ($validator->fails()) {
            return redirect()->action('DepartmentController@getAddView')
                        ->withErrors($validator)
                        ->withInput();
        }

    	$department = new Department();

        $department->code = $request->input('code');
        $department->name = $request->input('name');
        $department->section = $request->input('section');
        $department->building = $request->input('building');
        $department->building_number = $request->input('building_number');
        $department->building_floor = $request->input('building_floor');
        $department->building_address = $request->input('building_address'); 
        $department->tenant_id = $request->input('tenant_id');

    	$department->save();

    	return redirect()->action('DepartmentController@index');
    }

    public function getEditView($id) 
    {
        $department = Department::find($id);
        $tenants = new Tenant();

    	return view('vendor.adminlte.departments.edit', [ 'department' => $department, 'tenants'=> $tenants->all()]);
    }

    public function postEditView(Request $request) 
    {
        $validator = Validator::make($request->all(), [
            'code' => 'required|max:50|unique:departments,id,' . $request->input('id'),
            'name' => 'required|max:100|unique:departments,id,'. $request->input('id'),
        ]);

        if ($validator->fails()) {

            return redirect()->back()
                             ->withErrors($validator)
                             ->withInput($request->all());
        }

    	$department = Department::find($request->input('id'));

        $department->code = $request->input('code');
        $department->name = $request->input('name');
        $department->section = $request->input('section');
        $department->building = $request->input('building');
        $department->building_number = $request->input('building_number');
        $department->building_floor = $request->input('building_floor');
        $department->building_address = $request->input('building_address');
        $department->tenant_id = $request->input('tenant_id');
        
    	$department->update();

    	return redirect()->action('DepartmentController@index');
    }

    public function getDeleteView($id) 
    {
    	$department = Department::find($id);

    	return view('vendor.adminlte.departments.delete', [ 'department' => $department ]);
    }

    public function postDeleteView(Request $request) 
    {
    	$department = Department::find($request->input('id'));

    	$department->delete();

    	return redirect()->action('DepartmentController@index');
    }
}
