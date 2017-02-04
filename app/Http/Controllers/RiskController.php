<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Validator;
use App\Models\Risk;

class RiskController extends Controller
{
    public function index() 
    {
    	$risks = new Risk();

    	return view('vendor.adminlte.risks.index')->with('risks', $risks->all());
    }

    public function getAddRiskView() 
    {
    	$risks = new Risk();

    	return view('vendor.adminlte.risks.add');
    }

    public function postAddRiskView(Request $request) 
    {
    	$validator = Validator::make($request->all(), [
            'name' => 'required|unique:risk|max:255',
        ]);

        if ($validator->fails()) {
            return redirect()->action('RiskController@getAddRiskView')
                        ->withErrors($validator)
                        ->withInput();
        }

    	$risk = new Risk();
    	$risk->name = $request->input('name');
    	$risk->save();

    	return redirect()->action('RiskController@index');
    }

    public function getEditRiskView($id) 
    {
        $risk = Risk::find($id);

    	return view('vendor.adminlte.risks.edit', $risk);
    }

    public function postEditRiskView(Request $request) 
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|unique:risk|max:255',
        ]);

        if ($validator->fails()) {

            return redirect()->back()
                             ->withErrors($validator)
                             ->withInput($request->all());
        }

    	$risk = Risk::find($request->input('id'));
    	$risk->name = $request->input('name');
    	$risk->update();

    	return redirect()->action('RiskController@index');
    }

    public function getDeleteRiskView($id) 
    {
    	$risk = Risk::find($id);

    	return view('vendor.adminlte.risks.delete', $risk);
    }

    public function postDeleteRiskView(Request $request) 
    {
    	$risk = Risk::find($request->input('id'));

    	$risk->delete();

    	return redirect()->action('RiskController@index');
    }
}
