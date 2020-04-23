<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class JoinController extends Controller
{
    function index()
    {
    	$data1 =DB::table('caseofficers')
    		->join('addcases','addcases.officer_id', '=', 'caseofficers.officer_id')
    		->join('addsuspects','addsuspects.case_id', '=', 'addcases.case_id')
    		->select('addsuspects.suspect','addcases.case_id','caseofficers.officer_id')
    		->get();

    	return view('offhistory',compact('data1'));
    	
    }
}
