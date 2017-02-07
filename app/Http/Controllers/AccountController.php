<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Validator;
use App\User;

class AccountController extends Controller
{
    public function index() 
    {
    	$accounts = new User();

    	return view('vendor.adminlte.accounts.index')

            ->with('accounts', $accounts->all());
    }

    public function getAddView() 
    {
    	return view('vendor.adminlte.accounts.add');
    }

    public function postAddView(Request $request) 
    {
    	$validator = Validator::make($request->all(), [
            'code' => 'required|unique:users',
            'name' => 'required|unique:users',
            'username' => 'required|unique:users',
            'email' => 'required|email|unique:users',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }

    	$account = new User();
        $account->name = $request->input('name');
        $account->code = $request->input('code');
        $account->employee_id = $request->input('employee_id');
        $account->username = $request->input('username');
        $account->email = $request->input('email');
        $account->password = bcrypt($request->input('password'));
        $account->type = $request->input('type');
    	$account->save();

    	return redirect()->action('AccountController@index');
    }

    public function getEditView($id) 
    {
        $account = User::find($id);
        $account->password = '';

    	return view('vendor.adminlte.accounts.edit', [ 'account' => $account]);
    }

    public function postEditView(Request $request) 
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:100|unique:users,id,'. $request->input('id'),
            'code' => 'required|max:50|unique:users,id,' . $request->input('id'),
            'username' => 'required|max:50|unique:users,id,' . $request->input('id'),
            'email' => 'required|email|max:50|unique:users,id,' . $request->input('id'),
        ]);

        if ($validator->fails()) {

            return redirect()->back()
                             ->withErrors($validator)
                             ->withInput($request->all());
        }

    	$account = User::find($request->input('id'));
        $account->name = $request->input('name');
        $account->code = $request->input('code');
        $account->employee_id = $request->input('employee_id');
        $account->username = $request->input('username');
        $account->email = $request->input('email');
        // $account->password = bcrypt($request->input('password'));
        $account->type = $request->input('type');
    	$account->update();

    	return redirect()->action('AccountController@index');
    }

    public function getDeleteView($id) 
    {
    	$account = User::find($id);

    	return view('vendor.adminlte.accounts.delete', [ 'account' => $account ]);
    }

    public function postDeleteView(Request $request) 
    {
    	$account = User::find($request->input('id'));

    	$account->delete();

    	return redirect()->action('AccountController@index');
    }
}
