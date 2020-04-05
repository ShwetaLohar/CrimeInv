<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\predictresult;

class PredictController extends Controller
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
        return view('predict');
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
            'case_id' => 'required|min:1',
            'suspect' => 'required|min:5|max:50', 
            'point' => 'required|numeric',
        ],[
            'case_id.required' => '*Please enter numeric values* ', 
            'suspect.required' => '*Please enter suspect* ', 
            'point.required' => '*Please enter points*',
        ]);
        $p = new predictresult([
            'case_id' => $request->get('case_id'), 
            'suspect' => $request->get('suspect'), 
            'point' => $request->get('point')
        ]);

        $p->save();
        return redirect()->route('predict')->with('success','Prediction Added Successfully');

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
