<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;


class homecontroller extends Controller
{
    // public function index(){return view('index');}
    // public function contact(){return view('contact');}
    // public function about()
    // {
    //     return view('about');
    // }
    // public function download()
    // {
    //     return view('download');
    // }
    // public function career()
    // {
    //     return view('career');
    // }
    // public function media()
    // {
    //     return view('media');
    // }
    // public function single_blog()
    // {
    //     return view('single_blog');
    // }
    // public function FourFive()
    // {
    //     return view('Switches_Accessories/FourFive');
    // }

    // public function job()
    // {
    //     return view('Opening/job');
    // }

    // public function formValidationPost(Request $request)
    // {
    // 	$this->validate($request,[
    // 			'firstname' => 'required|min:5|max:35',
    // 			'email' => 'required|email|unique:users',
    // 		],[
    // 			'firstname.required' => ' The first name field is required.',
    // 			'email' => ' The Email-id field is required.',
    // 		]);


    // 	dd('You are successfully added all fields.');
    // }
    // public function ContactformValidationPost(Request $request)
    // {
    // 	$this->validate($request,[
    // 			'name' => 'required|min:5|max:35',
    //             'emails' => 'required|email|unique:users',
    //             'mobileno' => 'required|numeric',
    //             'subject' => 'required|min:3|max:35',
    //             'textbox' => 'required'
    // 		],[
    // 			'name.required' => ' These Name field is required.',
    //             'emails' => ' The Email-id field is required.',
    //             'mobileno' => 'The Mobile Number field is required.',
    //             'subject' => 'Required',
    //             'textbox' => 'Required'
    // 		]);


    // 	dd('You are successfully added all fields.');
    // }
    // public function Careerform(Request $request)
    // {
    // 	$this->validate($request,[
    // 			'UserName' => 'required|min:5|max:35',
    //             'Emailid' => 'required|email|unique:users',
    //             'Contact' => 'required|numeric',
    //             'uploadcv' => 'required'
                
    // 		],[
    // 			'UserName.required' => ' These Name field is required.',
    //             'Emailid' => ' The Emailid field is required.',
    //             'Contact' => 'The Mobile Number field is required.',
    //             'uploadcv' => 'Attached document required'
    // 		]);

    //         if($request->hasFile('uploadcv'))
    //             {
    //             $allowedfileExtension=['pdf','jpg','png','docx'];
    //             $files = $request->file('uploadcv');
    //             foreach($files as $file){
    //             $filename = $file->getClientOriginalName();
    //             $extension = $file->getClientOriginalExtension();
    //             $check=in_array($extension,$allowedfileExtension);
    //             dd($check);
                
    //             }
    //         }
         
    	   
    //  }



    



}
