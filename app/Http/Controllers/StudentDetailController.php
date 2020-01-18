<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
class StudentDetailController extends Controller
{
    //
     public function index($id)
    {
        $students = Student::find($id);
        return view('/placementOfficer1/view-student-details',['students'=>$students,'id'=>$id]);
    }
}
