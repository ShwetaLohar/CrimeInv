<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\User;
use Illuminate\support;

class AddOfficerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $offs=addofficer::all(); 
        // return view('offhistory',['offs'=>$offs]);
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
                // 'officer_id' => 'required|numeric',
                'password'=>'required|numeric',
                'username' => 'required|min:5|max:35',
                'area' => 'required|min:5|max:35',
                'address'=> 'required|min:5|max:35',
                'mobile' => 'required|digits:10|numeric',
                'email' =>'required|email|max:100',
                'select_file' => 'required|image|mimes:jpeg,png,jpg,gif',
            ],[
                // 'officer_id.required' => '*Please enter numeric values* ',
                'password.required'=> '*Please enter password', 
                'username.required' => '*Please enter names*',
                'area.required'=> '*Please enter area',
                'address.required'=>'*Please enter address',
                'mobile.required'=>'*Please enter phone number',
                'email.required'=> '*Please enter email ID',
                'select_file.required'=> '*Please upload image file'
            ]);
       $addof = new User([
            'username' =>$request->get('username'),
            'password'=> bcrypt($request->get('password')),
            // 'officer_id' => $request->get('officer_id'),
            'area' => $request->get('area'),
            'address' => $request->get('address'),
            'mobile' => $request->get('mobile'),
            'email' => $request->get('email'),
            'select_file' => $request->file('select_file'),
            'role_id'=>2
        ]);
        $addof->save();

        $officer_id = DB::table('users')->where('email', $request->get('email'))->value("officer_id");

//;
        $to_email = $request->get('email');
        $dataarr = array('officer_id'=> $officer_id,'password'=> $request->get('password'),'username'=> $request->get('username'));
     
        \Mail::send('dynamic_email_template', $dataarr, function($message) use ($to_email) {
            $message->to($to_email)
                ->subject('On Joining the Crime Investigation Team.');
            $message->from('shwetackt49@gmail.com','Shweta Lohar');
        });

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
