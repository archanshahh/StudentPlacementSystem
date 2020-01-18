<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class jobPostingsController extends Controller
{
    public function show()
    {
        $job_postings = DB::table('job_postings')->get();
        return view('student.view-job-postings', ['jobposting' => $job_postings]);
    }
}
