<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Officer;

class OfficerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('addofficer');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('addofficer');

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
                'officer_id' => 'required|numeric',
                'officer_name' => 'required|min:5|max:35',
                'area' => 'required|min:5|max:35',
                'address'=> 'required|min:5|max:35',
                'mobile' => 'required|min:11|numeric',
                'email' =>'required|email|max:100',
                // 'image' =>'required|image',
                'image' =>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ],[
                'officer_id.required' => '*Please enter numeric values* ',
                'officer_name.required' => '*Please enter names*',
                'area.required'=> '*Please enter area',
                'address.required'=>'*Please enter address',
                'mobile.required'=>'*Please enter phone number',
                'email.required'=> '*Please enter email ID',
                'image.required'=> '*Please upload image file',
            ]);
       $addof = new Officer([
            'officer_id' => $request->get('officer_id'),
            'officer_name' => $request->get('officer_name'),
            'area' => $request->get('area'),
            'address' => $request->get('address'),
            'mobile' => $request->get('mobile'),
            'email' => $request->get('email'),
            'image' => $request->file('image')
        ]);
        $addof->save();
        return redirect()->route('addofficer')->with('success','Officer Added Successfully');
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
