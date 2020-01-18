<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PlacementPaper;

class PlacementPaperController extends Controller
{

    public function store(Request $request){
        $this->validate($request,[
            'Year'=>'required',
            'Category'=>'required'
        ]);

        //full name of file
        $fullfilename = $request->file('file_name')->getClientOriginalName();

        //just filename
        $filename = pathinfo($fullfilename,PATHINFO_FILENAME);

        //just extension
        $extension = $request->file('file_name')->getClientOriginalExtension();

        $filenametostore = $filename."_".time().".".$extension;

        //upload image to public folder
        $path = $request->file('file_name')->storeAs('public/placement_papers',$filenametostore);

        $paper = new PlacementPaper;
        $paper->year = $request->get('Year');
        $paper->category = $request->get('Category');
        $paper->file_name = $filenametostore;

        $paper->save();
        return redirect('po/dashboard');
    }

    public function show(){
        $files = PlacementPaper::all();
        return view('student/view-placement-papers',['files'=>$files]);
    }
}
