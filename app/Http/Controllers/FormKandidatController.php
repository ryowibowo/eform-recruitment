<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Candidate;
use App\Models\CandidateExperience;
use Session;

class FormKandidatController extends Controller
{
    public function index()
    {
    	return view('pages.form');  
    }

    public function store(Request $request)
    {    
        // dd($request->all());
        DB::beginTransaction();
        try {

            $candidate = $request->all();
            $getId = Candidate::create($candidate)->id;
            foreach($request->company_name as $key => $value){
                CandidateExperience::create([
                    'candidate_id'     => $getId,
                    'company_name'     => $request->company_name[$key],
                    'posisition'       => $request->posisition[$key],
                    'date_start'       => $request->date_start[$key],
                    'date_end'         => $request->date_end[$key],
                    'reason_leaving'   => $request->reason_leaving[$key],
                    'job_desc'         => $request->job_desc[$key],
                ]);
            }

            DB::commit();
            Session::flash('message_alert', 'Berhasil Disimpan');
            return redirect()->route('form_kandiat'); 
        } catch (\Exception $e) {
            DB::rollback();
            return response()->json(['metaData' => ['code' => 500, 'message' => $e->getMessage()]], 200);
        }
    }
}
