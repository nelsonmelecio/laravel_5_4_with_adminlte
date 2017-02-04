<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Validator;
use App\Models\Manufacturer;
use App\Models\Tenant;

class ManufacturerController extends Controller
{
    public function index() 
    {
    	$manufacturers = new Manufacturer();

    	return view('vendor.adminlte.manufacturers.index')

            ->with('manufacturers', $manufacturers->all());
    }

    public function getAddView() 
    {
        $tenants = new Tenant();

    	return view('vendor.adminlte.manufacturers.add')
            ->with('tenants', $tenants->all());
    }

    public function postAddView(Request $request) 
    {
    	$validator = Validator::make($request->all(), [
            'code' => 'required|unique:manufacturers|max:50',
            'company_name' => 'required|unique:manufacturers|max:100',
        ]);

        if ($validator->fails()) {
            return redirect()->action('ManufacturerController@getAddView')
                        ->withErrors($validator)
                        ->withInput();
        }

    	$manufacturer = new Manufacturer();

        $manufacturer->code = $request->input('code');
        $manufacturer->company_name = $request->input('company_name');
        $manufacturer->contact_person = $request->input('contact_person');
        $manufacturer->company_address = $request->input('company_address');
        $manufacturer->province = $request->input('province');
        $manufacturer->zipcode = $request->input('zipcode');
        $manufacturer->phone_number1 = $request->input('phone_number1');
        $manufacturer->phone_number2 = $request->input('phone_number2');
        $manufacturer->fax_number = $request->input('fax_number');
        $manufacturer->mobile_number1 = $request->input('mobile_number1');
        $manufacturer->mobile_number2 = $request->input('mobile_number2');
        $manufacturer->web_addess = $request->input('web_addess');
        $manufacturer->country = $request->input('country');
        $manufacturer->tenant_id = $request->input('tenant_id');

    	$manufacturer->save();

    	return redirect()->action('ManufacturerController@index');
    }

    public function getEditView($id) 
    {
        $manufacturer = Manufacturer::find($id);
        $tenants = new Tenant();

    	return view('vendor.adminlte.manufacturers.edit', [ 'manufacturer' => $manufacturer, 'tenants'=> $tenants->all()]);
    }

    public function postEditView(Request $request) 
    {
        $validator = Validator::make($request->all(), [
            'code' => 'required|max:50|unique:manufacturers,id,' . $request->input('id'),
            'company_name' => 'required|max:100|unique:manufacturers,id,'. $request->input('id'),
        ]);

        if ($validator->fails()) {

            return redirect()->back()
                             ->withErrors($validator)
                             ->withInput($request->all());
        }

    	$manufacturer = Manufacturer::find($request->input('id'));

        $manufacturer->code = $request->input('code');
        $manufacturer->company_name = $request->input('company_name');
        $manufacturer->contact_person = $request->input('contact_person');
        $manufacturer->company_address = $request->input('company_address');
        $manufacturer->province = $request->input('province');
        $manufacturer->zipcode = $request->input('zipcode');
        $manufacturer->phone_number1 = $request->input('phone_number1');
        $manufacturer->phone_number2 = $request->input('phone_number2');
        $manufacturer->fax_number = $request->input('fax_number');
        $manufacturer->mobile_number1 = $request->input('mobile_number1');
        $manufacturer->mobile_number2 = $request->input('mobile_number2');
        $manufacturer->web_addess = $request->input('web_addess');
        $manufacturer->country = $request->input('country');
        $manufacturer->tenant_id = $request->input('tenant_id');
        
    	$manufacturer->update();

    	return redirect()->action('ManufacturerController@index');
    }

    public function getDeleteView($id) 
    {
    	$manufacturer = Manufacturer::find($id);

    	return view('vendor.adminlte.manufacturers.delete', [ 'manufacturer' => $manufacturer ]);
    }

    public function postDeleteView(Request $request) 
    {
    	$manufacturer = Manufacturer::find($request->input('id'));

    	$manufacturer->delete();

    	return redirect()->action('ManufacturerController@index');
    }
}
