<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Validator;
use App\Models\WorkType;

class WorkTypeController extends Controller
{
    public function index() 
    {
    	$work_types = new WorkType();

    	return view('vendor.adminlte.work_types.index')->with('work_types', $work_types->all());
    }

    public function getAddView() 
    {
    	return view('vendor.adminlte.work_types.add');
    }

    public function postAddView(Request $request) 
    {
    	$validator = Validator::make($request->all(), [
            'code' => 'required|unique:work_types|max:50',
            'name' => 'required|unique:work_types|max:100',
        ]);

        if ($validator->fails()) {
            return redirect()->action('WorkTypeController@getAddView')
                        ->withErrors($validator)
                        ->withInput();
        }

    	$work_type = new WorkType();
    	$work_type->code = $request->input('code');
        $work_type->name = $request->input('name');
    	$work_type->save();

    	return redirect()->action('WorkTypeController@index');
    }

    public function getEditView($id) 
    {
        $work_type = WorkType::find($id);

    	return view('vendor.adminlte.work_types.edit', $work_type);
    }

    public function postEditView(Request $request) 
    {
        $validator = Validator::make($request->all(), [
            'code' => 'required|unique:work_types|max:50',
            'name' => 'required|unique:work_types|max:100',
        ]);

        if ($validator->fails()) {

            return redirect()->back()
                             ->withErrors($validator)
                             ->withInput($request->all());
        }

    	$work_type = WorkType::find($request->input('id'));
    	$work_type->code = $request->input('code');
        $work_type->name = $request->input('name');
    	$work_type->update();

    	return redirect()->action('WorkTypeController@index');
    }

    public function getDeleteView($id) 
    {
    	$work_type = WorkType::find($id);

    	return view('vendor.adminlte.work_types.delete', $work_type);
    }

    public function postDeleteView(Request $request) 
    {
    	$work_type = WorkType::find($request->input('id'));

    	$work_type->delete();

    	return redirect()->action('WorkTypeController@index');
    }
}
