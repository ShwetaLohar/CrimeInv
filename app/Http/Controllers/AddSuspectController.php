<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\addsuspect;

class AddSuspectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $suspects =addsuspect::all();
        return view('viewsuspect');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('addsuspect');
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
                'suspect' => 'required|min:5|max:35',
                'mobile' => 'required|digits:10|numeric',
                'address'=> 'required|min:5|max:35',
                'relation' => 'required|min:3|max:50',
                'note' => 'required|min:5|max:50',
                'upload_file' => 'required|image|mimes:jpeg,png,jpg'
                
            ],[
                'case_id.required' => '*Please Enter numeric values* ',
                'suspect.required' => '*Please Enter suspect name*',
                'mobile.required' => '*Please Enter mobile* ',
                'address.required' => '*Please Enter address*',
                'relation.required' => '*Please Enter relation*',
                'note.required' => '*Please Enter note*',
                'upload_file.required'=> '*Please upload image file*'
            ]);
         
        $as = new addsuspect([
            'case_id' => $request->get('case_id'),
            'suspect' => $request->get('suspect'),
            'mobile' => $request->get('mobile'),
            'address' => $request->get('address'),
            'relation' => $request->get('relation'),
            'note' => $request->get('note'), 
            'upload_file' => $request->file('upload_file')
        ]);
        

        $as->save();
        return redirect()->route('addsuspect')->with('success','Suspect Added Successfully');
}


    public function getCasesByCaseId($caseId = 0) {

        $suspects = DB::table('addsuspects')->where('case_id', $caseId)->get();

        foreach ($suspects as $key => $suspect) {

            error_log($suspect->suspect);
            $row = DB::table('evids')->where('suspect', $suspect->suspect)->first();

            if($row === null){
                error_log("Null row.");
                $suspect->prob = 0 . " %";
            }else {
                error_log("Prob : ", (string) (($row->logical + $row->physical) / 2 ) * 10);

                $suspect->prob = ((($row->logical + $row->physical) / 2 ) * 10) . " %";
            }
        }
        
        return view('viewsuspect',['suspects'=>$suspects]);

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
