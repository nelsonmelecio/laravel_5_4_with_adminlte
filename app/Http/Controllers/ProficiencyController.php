<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Validator;
use App\Models\Proficiency;

class ProficiencyController extends Controller
{
    public function index() 
    {
    	$proficiencies = new Proficiency();

    	return view('vendor.adminlte.proficiency.index')->with('proficiencies', $proficiencies->all());
    }

    public function getAddView() 
    {
    	return view('vendor.adminlte.proficiency.add');
    }

    public function postAddView(Request $request) 
    {
    	$validator = Validator::make($request->all(), [
            'name' => 'required|unique:proficiency|max:255',
        ]);

        if ($validator->fails()) {
            return redirect()->action('ProficiencyController@getAddView')
                        ->withErrors($validator)
                        ->withInput();
        }

    	$proficiency = new Proficiency();
    	$proficiency->name = $request->input('name');
    	$proficiency->save();

    	return redirect()->action('ProficiencyController@index');
    }

    public function getEditView($id) 
    {
        $proficiency = Proficiency::find($id);

    	return view('vendor.adminlte.proficiency.edit', $proficiency);
    }

    public function postEditView(Request $request) 
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|unique:proficiency|max:255',
        ]);

        if ($validator->fails()) {

            return redirect()->back()
                             ->withErrors($validator)
                             ->withInput($request->all());
        }

    	$proficiency = Proficiency::find($request->input('id'));
    	$proficiency->name = $request->input('name');
    	$proficiency->update();

    	return redirect()->action('ProficiencyController@index');
    }

    public function getDeleteView($id) 
    {
    	$proficiency = Proficiency::find($id);

    	return view('vendor.adminlte.proficiency.delete', $proficiency);
    }

    public function postDeleteView(Request $request) 
    {
    	$proficiency = Proficiency::find($request->input('id'));

    	$proficiency->delete();

    	return redirect()->action('ProficiencyController@index');
    }
}
