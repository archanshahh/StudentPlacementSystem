<?php

namespace App\Http\Controllers\PlacementOfficer;

use App\Company;
use App\Http\Controllers\Controller;
use App\JobPosting;
use Illuminate\Support\Facades\DB;

class JobPostingController extends Controller
{
    public function index()
    {
        $jobPostings = DB::table('job_postings')->paginate(5);
        return view('PlacementOfficer.JobPosting.index', ['jobPostings' => $jobPostings]);
    }

    public function create()
    {
        $companies = Company::all();
        $jobPostings = DB::table('job_postings')->paginate(5);
        return view('PlacementOfficer.JobPosting.create', compact('companies'));
    }

    public function store()
    {
        JobPosting::create($this->validateJobPosting());
        return redirect('placement-officer/job-postings');
    }

    public function show(JobPosting $jobPosting)
    {
        //
    }

    public function edit(JobPosting $jobPosting)
    {
        $companies = Company::all();
        return view('PlacementOfficer.JobPosting.edit', ['jobPosting' => $jobPosting, 'companies' => $companies]);
    }

    public function update(JobPosting $jobPosting)
    {
        $jobPosting->update($this->validateJobPosting());
        return redirect('placement-officer/job-postings');
    }

    public function destroy(JobPosting $jobPosting)
    {
        $jobPosting->delete();
        return redirect('placement-officer/job-postings')->with('success', 'Job Posting has been deleted!!');
    }

    protected function validateJobPosting()
    {
        return request()->validate([
            'title' => 'required|min:3',
            'description' => 'required|min:25',
            'start_date' => 'required',
            'application_deadline' => 'required',
            'company_id' => 'required',
            'recruiter_name' => 'required|min:3'
        ]);
    }
}
