<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\addofficer;

class OffhistoryController extends Controller
{
     function list()
    {
    	$data =addofficer::orderBy('officer_id')->get();
    	return view('offhistory',['data'=> $data]);

    }
}
