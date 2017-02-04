<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Validator;
use App\Models\Condition;

class ConditionController extends Controller
{
    public function index() 
    {
    	$conditions = new Condition();

    	return view('vendor.adminlte.conditions.index')->with('conditions', $conditions->all());
    }

    public function getAddView() 
    {
    	return view('vendor.adminlte.conditions.add');
    }

    public function postAddView(Request $request) 
    {
    	$validator = Validator::make($request->all(), [
            'code' => 'required|unique:condition|max:50',
            'name' => 'required|unique:condition|max:100',
            'color' => 'required|max:100',
        ]);

        if ($validator->fails()) {
            return redirect()->action('ConditionController@getAddView')
                        ->withErrors($validator)
                        ->withInput();
        }

    	$condition = new Condition();
    	$condition->code = $request->input('code');
        $condition->name = $request->input('name');
        $condition->color = $request->input('color');
    	$condition->save();

    	return redirect()->action('ConditionController@index');
    }

    public function getEditView($id) 
    {
        $condition = Condition::find($id);

    	return view('vendor.adminlte.conditions.edit', $condition);
    }

    public function postEditView(Request $request) 
    {
        $validator = Validator::make($request->all(), [
            'code' => 'required|unique:condition|max:50',
            'name' => 'required|unique:condition|max:100',
            'color' => 'required|max:100',
        ]);

        if ($validator->fails()) {

            return redirect()->back()
                             ->withErrors($validator)
                             ->withInput($request->all());
        }

    	$condition = Condition::find($request->input('id'));
    	$condition->code = $request->input('code');
        $condition->name = $request->input('name');
        $condition->color = $request->input('color');
    	$condition->update();

    	return redirect()->action('ConditionController@index');
    }

    public function getDeleteView($id) 
    {
    	$condition = Condition::find($id);

    	return view('vendor.adminlte.conditions.delete', $condition);
    }

    public function postDeleteView(Request $request) 
    {
    	$condition = Condition::find($request->input('id'));

    	$condition->delete();

    	return redirect()->action('ConditionController@index');
    }
}
