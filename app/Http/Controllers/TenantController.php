<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Validator;
use App\Models\Tenant;

class TenantController extends Controller
{
    public function index() 
    {
    	$tenants = new Tenant();

    	return view('vendor.adminlte.tenants.index')->with('tenants', $tenants->all());
    }

    public function getAddView() 
    {
    	return view('vendor.adminlte.tenants.add');
    }

    public function postAddView(Request $request) 
    {
    	$validator = Validator::make($request->all(), [
            'code' => 'required|unique:tenant|max:50',
            'company_name' => 'required|unique:tenant|max:100',
        ]);

        if ($validator->fails()) {
            return redirect()->action('TenantController@getAddView')
                        ->withErrors($validator)
                        ->withInput();
        }

    	$tenant = new Tenant();
    	$tenant->code = $request->input('code');
        $tenant->company_name = $request->input('company_name');
        $tenant->business_type = $request->input('business_type');
        $tenant->number_department = $request->input('number_department');
        $tenant->number_equipment = $request->input('number_equipment');
        $tenant->license_number = $request->input('license_number');
        $tenant->permit_number = $request->input('permit_number');
        $tenant->ISO_Number = $request->input('ISO_Number');
        $tenant->phone_number1 = $request->input('phone_number1');
        $tenant->phone_number2 = $request->input('phone_number2');
        $tenant->email = $request->input('email');
        $tenant->website = $request->input('website');
        $tenant->country = $request->input('country');
        $tenant->date_registered = date_format(new \DateTime($request->input('date_registered')), 'Y-m-d H:i:s');
        $tenant->hospital_code = $request->input('hospital_code');
        $tenant->fax_number = $request->input('fax_number');
        $tenant->mobile_number1 = $request->input('mobile_number1');
        $tenant->mobile_number2 = $request->input('mobile_number2');
    	$tenant->save();

    	return redirect()->action('TenantController@index');
    }

    public function getEditView($id) 
    {
        $tenant = Tenant::find($id);

    	return view('vendor.adminlte.tenants.edit', $tenant);
    }

    public function postEditView(Request $request) 
    {
        $validator = Validator::make($request->all(), [
            'code' => 'required|max:50|unique:tenant,id,' . $request->input('id'),
            'company_name' => 'required|max:100|unique:tenant,id,'. $request->input('id'),
        ]);

        if ($validator->fails()) {

            return redirect()->back()
                             ->withErrors($validator)
                             ->withInput($request->all());
        }

    	$tenant = Tenant::find($request->input('id'));
        $tenant->code = $request->input('code');
        $tenant->company_name = $request->input('company_name');
        $tenant->business_type = $request->input('business_type');
        $tenant->number_department = $request->input('number_department');
        $tenant->number_equipment = $request->input('number_equipment');
        $tenant->license_number = $request->input('license_number');
        $tenant->permit_number = $request->input('permit_number');
        $tenant->ISO_Number = $request->input('ISO_Number');
        $tenant->phone_number1 = $request->input('phone_number1');
        $tenant->phone_number2 = $request->input('phone_number2');
        $tenant->email = $request->input('email');
        $tenant->website = $request->input('website');
        $tenant->country = $request->input('country');
        $tenant->date_registered = date_format(new \DateTime($request->input('date_registered')), 'Y-m-d H:i:s');
        $tenant->hospital_code = $request->input('hospital_code');
        $tenant->fax_number = $request->input('fax_number');
        $tenant->mobile_number1 = $request->input('mobile_number1');
        $tenant->mobile_number2 = $request->input('mobile_number2');
    	$tenant->update();

    	return redirect()->action('TenantController@index');
    }

    public function getDeleteView($id) 
    {
    	$tenant = Tenant::find($id);

    	return view('vendor.adminlte.tenants.delete', $tenant);
    }

    public function postDeleteView(Request $request) 
    {
    	$tenant = Tenant::find($request->input('id'));

    	$tenant->delete();

    	return redirect()->action('TenantController@index');
    }
}
