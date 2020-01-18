<?php

namespace App\Http\Controllers\PlacementOfficer;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ChartsController extends Controller
{
    //

    function index(){
        $data = DB::table('students')
            ->select(
                DB::raw('course as course'),
                DB::raw('count(*) as number'))
            ->groupBy('course')
            ->get();
        $array[] = ['Course', 'Number'];
        foreach($data as $key => $value)
        {
            $array[++$key] = [$value->course, $value->number];
        }
        return view('placementOfficer1.view-chart')->with('course', json_encode($array));
    }

    function viewGPAChart(){
        $students = DB::table('students')
            ->select(
                DB::raw("name as name"),
                DB::raw("gpa as gpa"))
            ->get();


        $result[] = ['Name','GPA'];
        foreach ($students as $key => $value) {
            $result[++$key] = [$value->name, (int)$value->gpa];
        }


        return view('placementOfficer1.view-gpa-chart')
            ->with('student',json_encode($result));
    }
}
