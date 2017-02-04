<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Validator;
use App\Models\Supplier;
use App\Models\Tenant;

class SupplierController extends Controller
{
    public function index() 
    {
    	$suppliers = new Supplier();

    	return view('vendor.adminlte.suppliers.index')

            ->with('suppliers', $suppliers->all());
    }

    public function getAddView() 
    {
        $tenants = new Tenant();

    	return view('vendor.adminlte.suppliers.add')
            ->with('tenants', $tenants->all());
    }

    public function postAddView(Request $request) 
    {
    	$validator = Validator::make($request->all(), [
            'code' => 'required|unique:suppliers|max:50',
            'name' => 'required|unique:suppliers|max:100',
        ]);

        if ($validator->fails()) {
            return redirect()->action('SupplierController@getAddView')
                        ->withErrors($validator)
                        ->withInput();
        }

    	$supplier = new Supplier();
        $supplier->code = $request->input('code');
        $supplier->name = $request->input('name');
        $supplier->supplier_person = $request->input('supplier_person');
        $supplier->supplier_address = $request->input('supplier_address');
        $supplier->city_address = $request->input('city_address');
        $supplier->state_province = $request->input('state_province');
        $supplier->postal = $request->input('postal');
        $supplier->country = $request->input('country');
        $supplier->phone_number = $request->input('phone_number');
        $supplier->fax_number = $request->input('fax_number');
        $supplier->mobile_number = $request->input('mobile_number');
        $supplier->email = $request->input('email');     
        $supplier->tenant_id = $request->input('tenant_id');

    	$supplier->save();

    	return redirect()->action('SupplierController@index');
    }

    public function getEditView($id) 
    {
        $supplier = Supplier::find($id);
        $tenants = new Tenant();

    	return view('vendor.adminlte.suppliers.edit', [ 'supplier' => $supplier, 'tenants'=> $tenants->all()]);
    }

    public function postEditView(Request $request) 
    {
        $validator = Validator::make($request->all(), [
            'code' => 'required|max:50|unique:suppliers,id,' . $request->input('id'),
            'name' => 'required|max:100|unique:suppliers,id,'. $request->input('id'),
        ]);

        if ($validator->fails()) {

            return redirect()->back()
                             ->withErrors($validator)
                             ->withInput($request->all());
        }

    	$supplier = Supplier::find($request->input('id'));
        $supplier->code = $request->input('code');
        $supplier->name = $request->input('name');
        $supplier->supplier_person = $request->input('supplier_person');
        $supplier->supplier_address = $request->input('supplier_address');
        $supplier->city_address = $request->input('city_address');
        $supplier->state_province = $request->input('state_province');
        $supplier->postal = $request->input('postal');
        $supplier->country = $request->input('country');
        $supplier->phone_number = $request->input('phone_number');
        $supplier->fax_number = $request->input('fax_number');
        $supplier->mobile_number = $request->input('mobile_number');
        $supplier->email = $request->input('email'); 
        $supplier->tenant_id = $request->input('tenant_id');
        
    	$supplier->update();

    	return redirect()->action('SupplierController@index');
    }

    public function getDeleteView($id) 
    {
    	$supplier = Supplier::find($id);

    	return view('vendor.adminlte.suppliers.delete', [ 'supplier' => $supplier ]);
    }

    public function postDeleteView(Request $request) 
    {
    	$supplier = Supplier::find($request->input('id'));

    	$supplier->delete();

    	return redirect()->action('SupplierController@index');
    }
}
