<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support;
use Illuminate\Support\Fascades\Mail;
use App\Mail\SendMail;

class SendEmailController extends Controller
{
    function index()
    {
    	return view('addofficer');
    }
    
    function send(Request $request) 
    {
    	$this->validate($request, [
    	    'officer_id' => 'required',
            'password'=>'required',
            'email' =>'required|email|'
        ]);

    	$data = array(
    		'officer_id' =>$request->officer_id,
    		'password'  =>$request->password
    	);


        
        $to_email = $request->email;
        $dataarr = array('name'=>"Shweta Lohar", "body" => "A test mail");
     
        Mail::send('dynamic_email_template', $dataarr, function($message) use ($to_name, $to_email) {
            $message->to($to_email)
                ->subject('Laravel Test Mail');
            $message->from('SENDER_EMAIL_ADDRESS','Test Mail');
        });

    	// Mail::to('shwetalohar014@gmail.com')->send(new SendMail($data));
    	return back()->with('success','Officer Added Successfully');




    }
}
