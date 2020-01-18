<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\job_postings;

class JobDetailController extends Controller
{
    //
    public function index($id)
    {
        $jobs = job_postings::find($id);
        return view('/student/view-job-details',['jobs'=>$jobs,'id'=>$id]);
    }
}
