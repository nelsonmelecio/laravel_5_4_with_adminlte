<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Validator;
use App\Models\Utilization;

class UtilizationController extends Controller
{
    public function index() 
    {
    	$utilizations = new Utilization();

    	return view('vendor.adminlte.utilizations.index')->with('utilizations', $utilizations->all());
    }

    public function getAddView() 
    {
    	return view('vendor.adminlte.utilizations.add');
    }

    public function postAddView(Request $request) 
    {
    	$validator = Validator::make($request->all(), [
            'code' => 'required|unique:utilization|max:50',
            'name' => 'required|max:100',
            'color' => 'required|max:100',
        ]);

        if ($validator->fails()) {
            return redirect()->action('UtilizationController@getAddView')
                        ->withErrors($validator)
                        ->withInput();
        }

    	$utilization = new Utilization();
    	$utilization->code = $request->input('code');
        $utilization->name = $request->input('name');
        $utilization->color = $request->input('color');
    	$utilization->save();

    	return redirect()->action('UtilizationController@index');
    }

    public function getEditView($id) 
    {
        $utilization = Utilization::find($id);

    	return view('vendor.adminlte.utilizations.edit', $utilization);
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

    	$utilization = Utilization::find($request->input('id'));
    	$utilization->code = $request->input('code');
        $utilization->name = $request->input('name');
        $utilization->color = $request->input('color');
    	$utilization->update();

    	return redirect()->action('UtilizationController@index');
    }

    public function getDeleteView($id) 
    {
    	$utilization = Utilization::find($id);

    	return view('vendor.adminlte.utilizations.delete', $utilization);
    }

    public function postDeleteView(Request $request) 
    {
    	$utilization = Utilization::find($request->input('id'));

    	$utilization->delete();

    	return redirect()->action('UtilizationController@index');
    }
}
