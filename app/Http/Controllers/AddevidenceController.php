<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\evid;

class AddevidenceController extends Controller
{
   public function index()
    {
        
          // $evids =evid::all()->toArray();
        return view('v_evidences');


    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('addevidence');
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
                'evidence' => 'required|min:5|max:35',
                'suspect' => 'required',
                'note' => 'required|min:5|max:80',
                'physical'=>'required|numeric',
                'logical'=>'required|numeric',
                
                
                
                
            ],[
            	
                'case_id.required' => '*Please enter numeric values* ',
                'evidence.required' => '*Please enter evidence* ',
                'suspect.required' => '*Please enter suspect*',
                'note.required' => '*Please enter note*',
                'physical.required'=> '*Please enter physical score*',
                'logical.required'=> '*Please enter logical score*',
                
                
            ]);
       $ae = new evid([
       		
            'evidence' => $request->get('evidence'),
            'suspect' => $request->get('suspect'),
            'note' => $request->get('note'),
            'physical' => $request->get('physical'),
            'logical' => $request->get('logical'),
            'case_id' => $request->get('case_id'),
                    
        ]);
        $ae->save();
        return redirect()->route('addevidence')->with('success','Evidence Added Successfully'); 
    }


     public function getEvidencesByCaseId($caseId = 0) {

        $addevids = DB::table('evids')->where('case_id', $caseId)->get();
        return view('v_evidences',['addevids'=>$addevids]);

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