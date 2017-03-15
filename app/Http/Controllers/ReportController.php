<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Validator;
use App\Models\Report;

class ReportController extends Controller
{
    public function CorrectiveIndex() 
    {
    	$reports = new Report();
    	return view('vendor.adminlte.reports.cm.index');
                   // ->with('reports', $reports->all());
    }

    public function PreventiveIndex() 
    {
        $reports = new Report();
        return view('vendor.adminlte.reports.pm.index');
                   // ->with('reports', $reports->all());
    }

}
