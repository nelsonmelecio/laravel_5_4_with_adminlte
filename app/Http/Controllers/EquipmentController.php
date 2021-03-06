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
use App\Models\Purchase;

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
            'asset_number' => 'required|unique:equipments|max:50',
            'category_id' => 'required|integer',
        ]);

        if ($validator->fails()) {
            return redirect()->action('EquipmentController@getAddView')
                        ->withErrors($validator)
                        ->withInput();
        }

    	$equipment = new Equipment();

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
        $equipment->outsourced_supplier_id = $request->input('outsourced_supplier_id');

    	$equipment->save();

        $purchase = new Purchase();
        $purchase->equipment_id =  $equipment->id;
        $purchase->purchase_no = $request->input('purchase_no');
        $purchase->purchase_cost = $request->input('purchase_cost');
        $purchase->purchase_date = date("Y-m-d", strtotime( $request->input('purchase_date') )); 
        $purchase->warranty_start = date("Y-m-d", strtotime( $request->input('warranty_start') )); 
        $purchase->warranty_expire = date("Y-m-d", strtotime( $request->input('warranty_expire') )); 
        $purchase->date_commissioned = date("Y-m-d", strtotime( $request->input('date_commissioned') )); 
        $purchase->save();

    	return redirect()->action('EquipmentController@index');
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
        

        $equipment = Equipment::find($id);
        $purchase = Purchase::where( 'equipment_id', $equipment->id)->first();

    	return view('vendor.adminlte.equipments.edit')
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
                    ->with('departments', $departments->all())
                    ->with('purchase', $purchase);

    }

    public function postEditView(Request $request) 
    {
        $validator = Validator::make($request->all(), [
            'asset_number' => 'required|unique:equipments,asset_number,' . $request->input('id'),
            'category_id' => 'required|integer',

        ]);

        if ($validator->fails()) {

            return redirect()->back()
                             ->withErrors($validator)
                             ->withInput($request->all());
        }

    	$equipment = Equipment::find($request->input('id'));

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
        $equipment->outsourced_supplier_id = $request->input('outsourced_supplier_id');

    	$equipment->update();

    	return redirect()->action('EquipmentController@getEditView', $request->input('id'));
    }

    public function postPurchaseUpdate(Request $request)
    {
        $purchase = Purchase::where( 'equipment_id', $request->input('id'))->first();
        $purchase->purchase_no = $request->input('purchase_no');
        $purchase->purchase_cost = $request->input('purchase_cost');
        $purchase->purchase_date = date("Y-m-d", strtotime( $request->input('purchase_date') )); 
        $purchase->warranty_start = date("Y-m-d", strtotime( $request->input('warranty_start') )); 
        $purchase->warranty_expire = date("Y-m-d", strtotime( $request->input('warranty_expire') )); 
        $purchase->date_commissioned = date("Y-m-d", strtotime( $request->input('date_commissioned') )); 
        $purchase->save();

        return redirect()->action('EquipmentController@getEditView', $request->input('id'));
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
        $purchase = Purchase::where( 'equipment_id', $request->input('id'))->first();
        $purchase->delete();

    	return redirect()->action('EquipmentController@index');
    }
}
