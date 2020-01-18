<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use Illuminate\Support\Facades\DB;

class StudentListController extends Controller
{
    public function show()
    {
        $studentlist = DB::table('students')->get();

        return view('placementOfficer1.view-student-list', ['studentlist' => $studentlist]);
    }
}
