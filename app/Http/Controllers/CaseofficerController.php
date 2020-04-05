<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\caseofficer;
use DB;

class CaseofficerController extends Controller
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
        return view('caseofficer');
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
                'officer_id' => 'required|min:1',
                
                
            ],[
                'case_id.required' => ' *Please enter numeric values*',
                'officer_id.required' => '*Please enter numeric values*'
                
                
            ]);
        
        $cofficer = new caseofficer([
            'case_id' => $request->get('case_id'),
            'officer_id' => $request->get('officer_id'),
            
        ]);

        $cofficer->save();
        return redirect()->route('caseofficer')->with('success','Case Officer Added Submitted.');


    }


//     public function getCaseNameByCaseId($caseId = 0) {


// // 
//         $caseName = DB::table('addcases')->where('case_id', $caseId)->value("name");
//         $this->case = ['caseId' => $caseId, 'caseName' => $caseName];
//         error_log($caseName);
//         return redirect()->route('caseofficer')->with('case', $this->case);

//     }
        
   

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
