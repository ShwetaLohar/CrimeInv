<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class JoinController extends Controller
{
    function index()
    {
    	$data1 =DB::table('caseofficers')
    		->join('users','users.officer_id', '=', 'caseofficers.officer_id')
    		->join('results','results.case_id', '=', 'users.case_id')
    		->select('results.suspect','users.case_id','caseofficers.name','users.officer_id','users
                .username')
    		->get();

    	return view('offhistory',['data1'=>$data1]);
    	
    }
}
