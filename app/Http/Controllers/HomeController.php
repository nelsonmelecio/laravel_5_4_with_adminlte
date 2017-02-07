<?php

/*
 * Taken from
 * https://github.com/laravel/framework/blob/5.3/src/Illuminate/Auth/Console/stubs/make/controllers/HomeController.stub
 */

namespace App\Http\Controllers;

// use Illuminate\Http\Request;

/**
 * Class HomeController
 * @package App\Http\Controllers
 */
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return Response
     */
    public function index()
    {
        return view('adminlte::home');
    }

    /**
     * Show an empty page.
     *
     * @return Response
     */
    public function blankPage()
    {
        return view('vendor.adminlte.blank');
    }

    // /**
    //  * Show an empty page.
    //  *
    //  * @return Response
    //  */
    // public function signout()
    // {
    //     Auth::logout();

    //     return redirect()->to('/');
    // }


}