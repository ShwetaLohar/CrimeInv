<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\result;

class ResultController extends Controller
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
        return view('addresult');
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
                'susp_id' => 'required|numeric',
                'note' => 'required|min:5|max:50',
                
            ],[
                'case_id.required' => ' *req*',
                'susp_id.required' => '*req* ',
                'note.required' => '*Please enter names*',
                
            ]);
        $res = new result([
            'case_id' => $request->get('case_id'),
            'susp_id' => $request->get('susp_id'),
            'note' => $request->get('note')
        ]);
        $res->save();
        return redirect()->route('addresult')->with('success','Result Submitted.');
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
