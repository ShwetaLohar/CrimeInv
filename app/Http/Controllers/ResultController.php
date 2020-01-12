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
        return view('index');
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
                'suspect' => 'required|min:5|max:35',
                'note' => 'required|min:5|max:35',
                
            ],[
                'case_id.required' => ' *Please enter numeric values*',
                'name.required' => ' *PLease enter Name*',
                'suspect.required' => '*Please enter numeric values* ',
                'note.required' => '*Please enter names*',
                
            ]);
        $res = new result([
            'case_id' => $request->get('case_id'),
            'name' => $request->get('name'),
            'suspect' => $request->get('suspect'),
            'note' => $request->get('note')
        ]);
        $res->save();
        return redirect()->route('index')->with('success','Result Submitted.');
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
