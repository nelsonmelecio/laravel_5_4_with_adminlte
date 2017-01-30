<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Validator;
use App\Models\RequestType;

class RequestTypeController extends Controller
{
    public function index() 
    {
    	$requests = new RequestType();

    	return view('vendor.adminlte.requests.index')->with('requests', $requests->all());
    }

    public function getAddView() 
    {
    	return view('vendor.adminlte.requests.add');
    }

    public function postAddView(Request $request) 
    {
    	$validator = Validator::make($request->all(), [
            'code' => 'required|unique:request_type|max:50',
            'name' => 'required|max:100',
        ]);

        if ($validator->fails()) {
            return redirect()->action('RequestTypeController@getAddView')
                        ->withErrors($validator)
                        ->withInput();
        }

    	$request_type = new RequestType();
    	$request_type->code = $request->input('code');
        $request_type->name = $request->input('name');
    	$request_type->save();

    	return redirect()->action('RequestTypeController@index');
    }

    public function getEditView($id) 
    {
        $request_type = RequestType::find($id);

    	return view('vendor.adminlte.requests.edit', $request_type);
    }

    public function postEditView(Request $request) 
    {
        $validator = Validator::make($request->all(), [
            'code' => 'required|unique:request_type|max:50',
            'name' => 'required|max:100',
        ]);

        if ($validator->fails()) {

            return redirect()->back()
                             ->withErrors($validator)
                             ->withInput($request->all());
        }

    	$request_type = RequestType::find($request->input('id'));
    	$request_type->code = $request->input('code');
        $request_type->name = $request->input('name');
    	$request_type->update();

    	return redirect()->action('RequestTypeController@index');
    }

    public function getDeleteView($id) 
    {
    	$request_type = RequestType::find($id);

    	return view('vendor.adminlte.requests.delete', $request_type);
    }

    public function postDeleteView(Request $request) 
    {
    	$request_type = RequestType::find($request->input('id'));

    	$request_type->delete();

    	return redirect()->action('RequestTypeController@index');
    }
}
