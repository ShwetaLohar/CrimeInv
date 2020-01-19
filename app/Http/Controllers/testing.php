<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class testing extends Controller
{
    /**
     * Show the form for creating a   new resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function home()
    {
        return view('home');
    }
    public function addcase()
    {
        return view('addcase');
    }
    public function addresult()
    {
        return view('addresult');
    }

    public function addofficer()
    {
        return view('addofficer');
    }
    public function caseofficer()
    {
        return view('caseofficer');
    }
    public function AdminLogin()
    {
        return view('AdminLogin');
    }
    public function login1()
    {
        return view('login1');
    }


    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        result::create(Request::all());
        return "Data Saved in Database";
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function CaseOfficerformValidationPost(Request $request)
    {
        $this->validate($request,[
                'case_id' => 'required|numeric',
                'name' => 'required|min:5|max:35',
                'officer_id' => 'required|numeric',
                'officer_name' => 'required|min:5|max:35',
                
            ],[
                'case_id.required' => ' *Please enter numeric values*',
                'name.required' => ' *PLease enter Name*',
                'officer_id' => '*Please enter numeric values* ',
                'officer_name.required' => '*Please enter names*',
                
            ]);


        dd('You are successfully added all fields.');
    }

    public function ResultformValidationPost(Request $request)
    {
        $this->validate($request,[
                'case_id' => 'required|numeric',
                'name' => 'required|min:5|max:35',
                'suspect' => 'required|min:5|max:35',
                'note' => 'required|min:5|max:35',
                
            ],[
                'case_id.required' => ' *Please enter numeric values*',
                'name.required' => ' *PLease enter Name*',
                'suspect.required' => '*Please enter numeric values* ',
                'note.required' => '*Please enter names*',
                
            ]);


        dd('You are successfully added all fields.');
    }

     public function AddCaseformValidationPost(Request $request)
    {
         $this->validate($request,[
                'case_id' => 'required|numeric',
                'name' => 'required|min:5|max:35',
                'officer_id' => 'required|numeric',
                'officer_name' => 'required|min:5|max:35',
                'note' => 'required|min:5|max:35',

                
            ],[
                'case_id.required' => ' *Please enter numeric values*',
                'name.required' => ' *PLease enter Name*',
                'officer_id' => '*Please enter numeric values* ',
                'officer_name.required' => '*Please enter names*',
                'note.required' => '*Please enter names*',
                
            ]);


        dd('You are successfully added all fields.');
    }

   
}

