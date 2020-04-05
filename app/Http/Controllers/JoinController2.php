<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class JoinController2 extends Controller
{
	function index()
	{
		$data =DB::table('addsuspects')
    		->join('results','results.suspect', '=', 'addsuspects.suspect')
    		->join('addcases','addcases.case_id', '=', 'addsuspects.case_id')
    		->select('results.suspect','addcases.case_id','addcases.name','addsuspects.suspect')
    		->get();

    	return view('crimehistory',['data'=>$data]);
    }

}
