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
    public function index()
    {
        return view('index');
    }

    /**
     * Show the form for creating a   new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addcase()
    {
        return view('addcase');
    }

    public function addofficer()
    {
        return view('addofficer');
    }
    public function caseofficer()
    {
        return view('caseofficer');
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
                'case_id' => ' The Case-id field is required.',
                'name.required' => ' These Name field is required.',
                'officer_id' => ' The Officer-id field is required.',
                'officer_name.required' => 'The names field is required.',
                
            ]);


        dd('You are successfully added all fields.');
    }

   
}

