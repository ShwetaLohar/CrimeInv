<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Session;
use DB;
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
            'password'    => 'required|alphaNum|min:5',
    	]);

    	$user_data = array(
           'username' =>$request->get('username'),
           'password' =>$request->get('password')
    	);

        DB::enableQueryLog();

    	if(Auth::attempt($user_data))
    	{

            if(Auth::user()->role_id == 1) {
                Session::put('isAdmin','true');
            }else {
                Session::put('isAdmin','false');
            }

            

            if(Auth::user()->role_id == 1)
                return redirect('/addcase');
            else
                return redirect('/crimehistory');
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
        return redirect('/main');
       
    }
}
