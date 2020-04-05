<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\addcase ;

class AddcaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('addcase');
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
                
                'name' => 'required|min:5|max:35',
                'officer_id' => 'required|min:1',
                'note' => 'required|min:5|max:35',

                
            ],[
                
                'name.required' => ' *PLease enter Name*',
                'officer_id' => '*Please enter numeric values* ',
                'note.required' => '*Please enter names*',
                
            ]);
        $ac = new addcase([
            
            'name' => $request->get('name'),
            'officer_id' => $request->get('officer_id'),
            'note' =>$request->get('note')
        ]);
        $ac->save();
        return redirect()->route('addcase')->with('success','Case Added Successfully.');
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
