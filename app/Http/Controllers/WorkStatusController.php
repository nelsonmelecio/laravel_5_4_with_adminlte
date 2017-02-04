<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Validator;
use App\Models\WorkStatus;

class WorkStatusController extends Controller
{
    public function index() 
    {
    	$work_statuses = new WorkStatus();

    	return view('vendor.adminlte.work_statuses.index')->with('work_statuses', $work_statuses->all());
    }

    public function getAddView() 
    {
    	return view('vendor.adminlte.work_statuses.add');
    }

    public function postAddView(Request $request) 
    {
    	$validator = Validator::make($request->all(), [
            'code' => 'required|unique:work_status|max:50',
            'name' => 'required|unique:work_status|max:100',
        ]);

        if ($validator->fails()) {
            return redirect()->action('WorkStatusController@getAddView')
                        ->withErrors($validator)
                        ->withInput();
        }

    	$work_status = new WorkStatus();
    	$work_status->code = $request->input('code');
        $work_status->name = $request->input('name');
    	$work_status->save();

    	return redirect()->action('WorkStatusController@index');
    }

    public function getEditView($id) 
    {
        $work_status = WorkStatus::find($id);

    	return view('vendor.adminlte.work_statuses.edit', $work_status);
    }

    public function postEditView(Request $request) 
    {
        $validator = Validator::make($request->all(), [
            'code' => 'required|unique:work_status|max:50',
            'name' => 'required|unique:work_status|max:100',
        ]);

        if ($validator->fails()) {

            return redirect()->back()
                             ->withErrors($validator)
                             ->withInput($request->all());
        }

    	$work_status = WorkStatus::find($request->input('id'));
    	$work_status->code = $request->input('code');
        $work_status->name = $request->input('name');
    	$work_status->update();

    	return redirect()->action('WorkStatusController@index');
    }

    public function getDeleteView($id) 
    {
    	$work_status = WorkStatus::find($id);

    	return view('vendor.adminlte.work_statuses.delete', $work_status);
    }

    public function postDeleteView(Request $request) 
    {
    	$work_status = WorkStatus::find($request->input('id'));

    	$work_status->delete();

    	return redirect()->action('WorkStatusController@index');
    }
}
