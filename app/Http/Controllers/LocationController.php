<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Validator;
use App\Models\Location;
use App\Models\Tenant;

class LocationController extends Controller
{
    public function index() 
    {
    	$locations = new Location();

    	return view('vendor.adminlte.locations.index')

            ->with('locations', $locations->all());
    }

    public function getAddView() 
    {
        $tenants = new Tenant();

    	return view('vendor.adminlte.locations.add')
            ->with('tenants', $tenants->all());
    }

    public function postAddView(Request $request) 
    {
    	$validator = Validator::make($request->all(), [
            'code' => 'required|unique:location|max:50',
            'name' => 'required|unique:location|max:100',
        ]);

        if ($validator->fails()) {
            return redirect()->action('LocationController@getAddView')
                        ->withErrors($validator)
                        ->withInput();
        }

    	$location = new Location();

        $location->code = $request->input('code');
        $location->name = $request->input('name');
        $location->building_name = $request->input('building_name');
        $location->block_number = $request->input('block_number');
        $location->building_number = $request->input('building_number');
        $location->floor_number = $request->input('floor_number');
        $location->room_number = $request->input('room_number');
        $location->tenant_id = $request->input('tenant_id');

    	$location->save();

    	return redirect()->action('LocationController@index');
    }

    public function getEditView($id) 
    {
        $location = Location::find($id);
        $tenants = new Tenant();

    	return view('vendor.adminlte.locations.edit', [ 'location' => $location, 'tenants'=> $tenants->all()]);
    }

    public function postEditView(Request $request) 
    {
        $validator = Validator::make($request->all(), [
            'code' => 'required|max:50|unique:location,id,' . $request->input('id'),
            'name' => 'required|max:100|unique:location,id,'. $request->input('id'),
        ]);

        if ($validator->fails()) {

            return redirect()->back()
                             ->withErrors($validator)
                             ->withInput($request->all());
        }

    	$location = Location::find($request->input('id'));

        $location->code = $request->input('code');
        $location->name = $request->input('name');
        $location->building_name = $request->input('building_name');
        $location->block_number = $request->input('block_number');
        $location->building_number = $request->input('building_number');
        $location->floor_number = $request->input('floor_number');
        $location->room_number = $request->input('room_number');
        $location->tenant_id = $request->input('tenant_id');
        
    	$location->update();

    	return redirect()->action('LocationController@index');
    }

    public function getDeleteView($id) 
    {
    	$location = Location::find($id);

    	return view('vendor.adminlte.locations.delete', [ 'location' => $location ]);
    }

    public function postDeleteView(Request $request) 
    {
    	$location = Location::find($request->input('id'));

    	$location->delete();

    	return redirect()->action('LocationController@index');
    }
}
