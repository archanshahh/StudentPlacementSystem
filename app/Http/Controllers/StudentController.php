<?php

namespace App\Http\Controllers;

use App\Student;
use App\StudentLogin;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('home');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('student.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        dd($this);
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'course' => 'required',
            'expected_graduation' => 'required',
            'mobile' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'institution' => 'required',
            'gpa' => 'required',
            'gender' => 'required'
        ]);

//        User::create($request->all());
        Student::create($request->all());
        return redirect('student/login');
    }
    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        return view('student.login');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Student $student)
    {
        $data = $request->session()->get('email');
        $student = DB::table('students')->where('email', $data)->first();
        return view('student.edit')->with('student', $student);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Student $student)
    {
        $student->update($this->validateStudent());
        return redirect('student/dashboard');
    }

    public function validateStudent(){
               return request()->validate([
                'name' => 'required',
                'email' => 'required',
                'course' => 'required',
                'expected_graduation' => 'required',
                'mobile' => 'required',
                'institution' => 'required',
                'gpa' => 'required',
                'gender' => 'required'
            ]);

    }
    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */

    public function viewDashboard(Request $request)
    {
        $value = $request->session()->get('email', 'null');
//        dd($value);
        return view('student/dashboard');
    }

    public function viewStudents()
    {
        $students = Student::all();
        return view('admin/manage-students', ['students' => $students]);
    }

    public function viewSearchStudents(Request $request)
    {
        $name = $request->input('searchName');
        $students = DB::select(DB::raw("select * from students where name LIKE '%$name%'"));
        return view('admin/manage-students', ['students' => $students]);
    }

    public function destroy(Student $student)
    {
        //
        $student->delete();
        return redirect('admin/manage-students');
    }
}
