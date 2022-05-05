<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Candidate;
use DataTables;
use App\Models\CandidateExperience;


class CandidateController extends Controller
{
    public function index()
    {
    	return view('pages.candidate.index');  
    }

    public function datatables(Candidate $candidate)
    {
        $data = $candidate->get();
        return DataTables::of($data)
            ->addIndexColumn()
            ->addColumn('action', function ($row) {
                $actionBtn = '<a  href="'.route('candidate.details', $row->id).'" class="edit btn btn-info btn-sm">
                            <i class="fas fa-info-circle"></i>
                            </a>';
                return $actionBtn;
            })
            ->rawColumns(['action'])
            ->make(true);
    }

    public function details($id)
    {   
        $candidate = Candidate::where('id', $id)->first();
        $detail = CandidateExperience::where('candidate_id', $id)->orderBy('date_start', 'DESC')->get();
        // dd($detail);
    	return view('pages.candidate.details', compact('candidate', 'detail'));
    	// return view('pages.candidate.details', ['candidate' => $candidate, 'detail' => $detail ]);

    }

    
}
