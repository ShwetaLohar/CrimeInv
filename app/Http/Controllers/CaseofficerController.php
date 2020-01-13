<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\caseofficer;

class CaseofficerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('caseofficer');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
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
        
        $cofficer = new caseofficer([
            'case_id' => $request->get('case_id'),
            'name' => $request->get('name'),
            'officer_id' => $request->get('officer_id'),
            'officer_name' => $request->get('officer_name')
        ]);

        $cofficer->save();
        return redirect()->route('caseofficer')->with('success','Case Officer Added Submitted.');


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
}
