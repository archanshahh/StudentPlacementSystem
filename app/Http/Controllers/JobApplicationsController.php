<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\JobApplications;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
class JobApplicationsController extends Controller
{
    public function resumeUpload(Request $request){
        //full name of file
        $fullfilename = $request->file('file_name')->getClientOriginalName();
        //just filename
        $filename = pathinfo($fullfilename,PATHINFO_FILENAME);
        //just extension
        $extension = $request->file('file_name')->getClientOriginalExtension();
        $filenametostore = $filename."_".time().".".$extension;

        //upload image to public folder
        $path = $request->file('file_name')->storeAs('public/StudentResume',$filenametostore);
        $jobApplication = new JobApplications;
        $jobApplication->id = 'A01289372';
        $jobApplication->student_id = '5';
        $jobApplication->job_id = $request->job_id;
        $jobApplication->company_id = $request->company_id;
        $jobApplication->application_date = date('Y-m-d');
        $jobApplication->resume = $filenametostore;
        $jobApplication->save();

        $data = array(
            'name' => $request->student_id,
            'message' => "Hello ".$request->company_id.", this student: ". $request->student_id . " has applied at the position: ". $request->job_id. " at your company."
        );

        Mail::to('prekshapatel81@gmail.com')->send(new SendMail($data));

        return redirect('student/dashboard');
    }
}
