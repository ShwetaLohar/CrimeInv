<?php

namespace App\Http\Controllers;
use Mail;
use Illuminate\Http\Request;

class ContactFormController extends Controller
{
    public function create()
    {
    	return view('contact');
    }

    public function store(Request $request)
    {
    	$this->validate($request, [
    		'name' =>'required',
    		'email' => 'required|email',
    		'message' => 'required'
    	]);


     Mail::send('contact_message', [
     	'msg' => $request->message
     ], function ($mail) use($request) {
     	$mail->from($request->email, $request->name);

     	$mail->to('shwetalohar014@gmail.com')->subject('Contact Message');
     });

     return redirect()->back()->with('flash_message','Thank You for your feedback');
    }
}
