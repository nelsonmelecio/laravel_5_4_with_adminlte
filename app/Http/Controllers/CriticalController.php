<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Validator;
use App\Models\Critical;

class CriticalController extends Controller
{
    public function index() 
    {
    	$criticals = new Critical();

    	return view('vendor.adminlte.criticals.index')->with('criticals', $criticals->all());
    }

    public function getAddView() 
    {
    	return view('vendor.adminlte.criticals.add');
    }

    public function postAddView(Request $request) 
    {
    	$validator = Validator::make($request->all(), [
            'name' => 'required|unique:critical|max:255',
        ]);

        if ($validator->fails()) {
            return redirect()->action('CriticalController@getAddView')
                        ->withErrors($validator)
                        ->withInput();
        }

    	$critical = new Critical();
    	$critical->name = $request->input('name');
    	$critical->save();

    	return redirect()->action('CriticalController@index');
    }

    public function getEditView($id) 
    {
        $critical = Critical::find($id);

    	return view('vendor.adminlte.criticals.edit', $critical);
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

    	$critical = Critical::find($request->input('id'));
    	$critical->name = $request->input('name');
    	$critical->update();

    	return redirect()->action('CriticalController@index');
    }

    public function getDeleteView($id) 
    {
    	$critical = Critical::find($id);

    	return view('vendor.adminlte.criticals.delete', $critical);
    }

    public function postDeleteView(Request $request) 
    {
    	$critical = Critical::find($request->input('id'));

    	$critical->delete();

    	return redirect()->action('CriticalController@index');
    }
}
