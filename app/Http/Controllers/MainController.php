<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Auth;

class MainController extends Controller
{
    function index()
    {
        return view('AdminLogin');
    }



    function checklogin(Request $request)
    {
    	$this->validate($request, [
    		'username'    => 'required',
            'password'    => 'required|alphaNum|min:3',
    	]);

    	$user_data = array(
           'username' =>$request->get('username'),
           'password' =>$request->get('password')
    	);

    	if(Auth::attempt($user_data))
    	{
    		return redirect('/addcase');
    	}
    	else
    	{
    		return back()->with('error', 'Wrong Login Details');
    	}


    }
    function successlogin()
    {
        return view('successlogin');
    }
    function logout()
    {
        Auth::logout();
        return redirect('main');
    }
}
