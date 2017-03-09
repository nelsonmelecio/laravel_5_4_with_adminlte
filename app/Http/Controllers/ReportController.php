<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Validator;
use App\Models\Critical;

class ReportController extends Controller
{
    public function index() 
    {
    	$criticals = new Report();

    	return view('vendor.adminlte.reports.index')->with('criticals', $criticals->all());
    }

    public function getAddView() 
    {
    	return view('vendor.adminlte.reports.add');
    }

    public function postAddView(Request $request) 
    {
    	$validator = Validator::make($request->all(), [
            'name' => 'required|unique:critical|max:255', //change the table 
        ]);

        if ($validator->fails()) {
            return redirect()->action('ReportController@getAddView')
                        ->withErrors($validator)
                        ->withInput();
        }

    	$critical = new Report();
    	$critical->name = $request->input('name');
    	$critical->save();

    	return redirect()->action('ReportController@index');
    }

    public function getEditView($id) 
    {
        $critical = Report::find($id);

    	return view('vendor.adminlte.reports.edit', $critical);
    }

    public function postEditView(Request $request) 
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|unique:critical|max:255',
        ]);

        if ($validator->fails()) {

            return redirect()->back()
                             ->withErrors($validator)
                             ->withInput($request->all());
        }

    	$critical = Report::find($request->input('id'));
    	$critical->name = $request->input('name');
    	$critical->update();

    	return redirect()->action('ReportController@index');
    }

    public function getDeleteView($id) 
    {
    	$critical = Report::find($id);

    	return view('vendor.adminlte.reports.delete', $critical);
    }

    public function postDeleteView(Request $request) 
    {
    	$critical = Report::find($request->input('id'));

    	$critical->delete();

    	return redirect()->action('ReportController@index');
    }
}
