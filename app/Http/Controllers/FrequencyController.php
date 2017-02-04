<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Validator;
use App\Models\Frequency;

class FrequencyController extends Controller
{
    public function index() 
    {
    	$frequencies = new Frequency();

    	return view('vendor.adminlte.frequency.index')->with('frequencies', $frequencies->all());
    }

    public function getAddView() 
    {
    	return view('vendor.adminlte.frequency.add');
    }

    public function postAddView(Request $request) 
    {
    	$validator = Validator::make($request->all(), [
            'name' => 'required|unique:frequency|max:255',
        ]);

        if ($validator->fails()) {
            return redirect()->action('FrequencyController@getAddView')
                        ->withErrors($validator)
                        ->withInput();
        }

    	$frequency = new Frequency();
    	$frequency->name = $request->input('name');
    	$frequency->save();

    	return redirect()->action('FrequencyController@index');
    }

    public function getEditView($id) 
    {
        $frequency = Frequency::find($id);

    	return view('vendor.adminlte.frequency.edit', $frequency);
    }

    public function postEditView(Request $request) 
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|unique:frequency|max:255',
        ]);

        if ($validator->fails()) {

            return redirect()->back()
                             ->withErrors($validator)
                             ->withInput($request->all());
        }

    	$frequency = Frequency::find($request->input('id'));
    	$frequency->name = $request->input('name');
    	$frequency->update();

    	return redirect()->action('FrequencyController@index');
    }

    public function getDeleteView($id) 
    {
    	$frequency = Frequency::find($id);

    	return view('vendor.adminlte.frequency.delete', $frequency);
    }

    public function postDeleteView(Request $request) 
    {
    	$frequency = Frequency::find($request->input('id'));

    	$frequency->delete();

    	return redirect()->action('FrequencyController@index');
    }
}
