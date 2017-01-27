<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Risk;

class RiskController extends Controller
{
    public function index() 
    {
    	$risks = new Risk();

    	return view('vendor.adminlte.risk')->with('risks', $risks->all());
    }
}
