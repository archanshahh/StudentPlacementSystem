<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\job_postings;
use Illuminate\Support\Facades\DB;

class job_posting_controller extends Controller
{
    //
    public function show()
    {
       $job_postings = DB::table('job_postings')->get();
//        $job_postings = job_postings::all();
        //dd($jobpostings);
        return view('student.view-job-postings', ['jobposting' => $job_postings]);
    }
}
