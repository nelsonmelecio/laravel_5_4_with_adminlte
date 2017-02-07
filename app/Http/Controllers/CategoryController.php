<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Validator;
use App\Models\Category;
use App\Models\Tenant;
use App\Models\Proficiency;
use App\Models\Risk;
use App\Models\Frequency;
use App\Models\Classification;
use App\Models\Critical;

class CategoryController extends Controller
{
    public function index() 
    {
    	$categories = new Category();

    	return view('vendor.adminlte.category.index')

            ->with('categories', $categories->all());
    }

    public function getAddView() 
    {
        $tenants = new Tenant();
        $proficiency = new Proficiency();
        $risk = new Risk();
        $frequency = new Frequency();
        $classification = new Classification();
        $critical = new Critical();

    	return view('vendor.adminlte.category.add')
            ->with('tenants', $tenants->all())
            ->with('proficiency', $proficiency->all())
            ->with('risk', $risk->all())
            ->with('frequency', $frequency->all())
            ->with('classification', $classification->all())
            ->with('critical', $critical->all());
    }

    public function postAddView(Request $request) 
    {

        // 'ecri_code',
        // 'description',
        // 'asset_definition',
        // 'life_service',
        // 'critical_id',
        // 'classification_id',
        // 'frequency_id',
        // 'risk_id',
        // 'proficiency_id',
        // 'tenant_id',

    	$validator = Validator::make($request->all(), [
            'description' => 'required|unique:category',
            'ecri_code' => 'required|unique:category',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }

    	$category = new Category();

        $category->description = $request->input('description');
        $category->critical_id = $request->input('critical_id');
        $category->classification_id = $request->input('classification_id');
        $category->frequency_id = $request->input('frequency_id');
        $category->risk_id = $request->input('risk_id');
        $category->life_service = $request->input('life_service');
        $category->asset_definition = $request->input('asset_definition'); 
        $category->proficiency_id = $request->input('proficiency_id');
        $category->ecri_code = $request->input('ecri_code');
        $category->tenant_id = $request->input('tenant_id');

    	$category->save();

    	return redirect()->action('CategoryController@index');
    }

    public function getEditView($id) 
    {
        $category = Category::find($id);
        $tenants = new Tenant();
        $proficiency = new Proficiency();
        $risk = new Risk();
        $frequency = new Frequency();
        $classification = new Classification();
        $critical = new Critical();
    	
        return view('vendor.adminlte.category.edit')
            ->with('category', $category)
            ->with('tenants', $tenants->all())
            ->with('proficiency', $proficiency->all())
            ->with('risk', $risk->all())
            ->with('frequency', $frequency->all())
            ->with('classification', $classification->all())
            ->with('critical', $critical->all());
    }

    public function postEditView(Request $request) 
    {
        $validator = Validator::make($request->all(), [
            'description' => 'required|max:50|unique:category,id,' . $request->input('id'),
            'ecri_code' => 'required|max:100|unique:category,id,'. $request->input('id'),
        ]);

        if ($validator->fails()) {

            return redirect()->back()
                             ->withErrors($validator)
                             ->withInput($request->all());
        }

    	$category = Category::find($request->input('id'));

        $category->description = $request->input('description');
        $category->critical_id = $request->input('critical_id');
        $category->classification_id = $request->input('classification_id');
        $category->frequency_id = $request->input('frequency_id');
        $category->risk_id = $request->input('risk_id');
        $category->life_service = $request->input('life_service');
        $category->asset_definition = $request->input('asset_definition'); 
        $category->proficiency_id = $request->input('proficiency_id');
        $category->ecri_code = $request->input('ecri_code');
        $category->tenant_id = $request->input('tenant_id');
        
    	$category->update();

    	return redirect()->action('CategoryController@index');
    }

    public function getDeleteView($id) 
    {
    	$category = Category::find($id);

    	return view('vendor.adminlte.category.delete', [ 'category' => $category ]);
    }

    public function postDeleteView(Request $request) 
    {
    	$category = Category::find($request->input('id'));

    	$category->delete();

    	return redirect()->action('CategoryController@index');
    }
}
