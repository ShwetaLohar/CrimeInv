<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class JoinController2 extends Controller
{
	function index()
	{
		$data =DB::table('addsuspects')
    		->join('caseofficers','caseofficers.case_id', '=', 'addsuspects.case_id')
    		->join('addcases','addcases.officer_id', '=', 'caseofficers.officer_id')
    		->select('caseofficers.case_id','addcases.name','addsuspects.suspect')
    		->get();

    	return view('crimehistory',compact('data'));
    }

}
