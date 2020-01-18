<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PlacedStudents;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
class PlacedStudentController extends Controller
{
    //
    public function selectStudent(Request $request){

    	$placedStudents = new PlacedStudents;

        $placedStudents->date = date('Y-m-d');
        $placedStudents->student_id = $request->student_id;
        $placedStudents->job_id = $request->job_id;
        $placedStudents->company_id = $request->company_id;
        $placedStudents->save();

        $data = array(
        	'name' => $request->student_id,
        	'message' => "Hello ".$request->student_id.", You've been selected by ". $request->company_id . " Company under Job id: ". $request->job_id
        );

        Mail::to($request->student_email)->send(new SendMail($data));

    	return back()->with('success', 'This student selected.');
    }
}
