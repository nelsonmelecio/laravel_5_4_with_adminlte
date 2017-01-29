<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Validator;
use App\Models\Classification;

class ClassificationController extends Controller
{
    public function index() 
    {
    	$classifications = new Classification();

    	return view('vendor.adminlte.classifications.index')->with('classifications', $classifications->all());
    }

    public function getAddView() 
    {
    	return view('vendor.adminlte.classifications.add');
    }

    public function postAddView(Request $request) 
    {
    	$validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
        ]);

        if ($validator->fails()) {
            return redirect()->action('ClassificationController@getAddView')
                        ->withErrors($validator)
                        ->withInput();
        }

    	$classification = new Classification();
    	$classification->name = $request->input('name');
    	$classification->save();

    	return redirect()->action('ClassificationController@index');
    }

    public function getEditView($id) 
    {
        $classification = Classification::find($id);

    	return view('vendor.adminlte.classifications.edit', $classification);
    }

    public function postEditView(Request $request) 
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
        ]);

        if ($validator->fails()) {

            return redirect()->back()
                             ->withErrors($validator)
                             ->withInput($request->all());
        }

    	$classification = Classification::find($request->input('id'));
    	$classification->name = $request->input('name');
    	$classification->update();

    	return redirect()->action('ClassificationController@index');
    }

    public function getDeleteView($id) 
    {
    	$classification = Classification::find($id);

    	return view('vendor.adminlte.classifications.delete', $classification);
    }

    public function postDeleteView(Request $request) 
    {
    	$classification = Classification::find($request->input('id'));

    	$classification->delete();

    	return redirect()->action('ClassificationController@index');
    }
}
