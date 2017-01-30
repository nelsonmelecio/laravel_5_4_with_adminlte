<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Validator;
use App\Models\Status;

class StatusController extends Controller
{
    public function index() 
    {
    	$statuses = new Status();

    	return view('vendor.adminlte.status.index')->with('statuses', $statuses->all());
    }

    public function getAddView() 
    {
    	return view('vendor.adminlte.status.add');
    }

    public function postAddView(Request $request) 
    {
    	$validator = Validator::make($request->all(), [
            'code' => 'required|unique:request_type|max:50',
            'name' => 'required|max:100',
            'color' => 'required|max:100',
        ]);

        if ($validator->fails()) {
            return redirect()->action('StatusController@getAddView')
                        ->withErrors($validator)
                        ->withInput();
        }

    	$status = new Status();
    	$status->code = $request->input('code');
        $status->name = $request->input('name');
        $status->color = $request->input('color');
    	$status->save();

    	return redirect()->action('StatusController@index');
    }

    public function getEditView($id) 
    {
        $status = Status::find($id);

    	return view('vendor.adminlte.status.edit', $status);
    }

    public function postEditView(Request $request) 
    {
        $validator = Validator::make($request->all(), [
            'code' => 'required|unique:request_type|max:50',
            'name' => 'required|max:100',
            'color' => 'required|max:100',
        ]);

        if ($validator->fails()) {

            return redirect()->back()
                             ->withErrors($validator)
                             ->withInput($request->all());
        }

    	$status = Status::find($request->input('id'));
    	$status->code = $request->input('code');
        $status->name = $request->input('name');
        $status->color = $request->input('color');
    	$status->update();

    	return redirect()->action('StatusController@index');
    }

    public function getDeleteView($id) 
    {
    	$status = Status::find($id);

    	return view('vendor.adminlte.status.delete', $status);
    }

    public function postDeleteView(Request $request) 
    {
    	$status = Status::find($request->input('id'));

    	$status->delete();

    	return redirect()->action('StatusController@index');
    }
}
