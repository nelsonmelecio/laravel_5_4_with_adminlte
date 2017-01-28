<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Risk;

class RiskController extends Controller
{
    public function index() 
    {
    	$risks = new Risk();

    	return view('vendor.adminlte.risks.index')->with('risks', $risks->all());
    }
}
