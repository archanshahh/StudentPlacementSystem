<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ContactUs;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
class ContactUsController extends Controller
{
    //
    public function insertData(Request $request){

    	ContactUs::create($request->all());
    	//Send An Email
		    $content = [
        	'name' => $request->name,
        	'email'=>$request->email,
        	'message'=>$request->message
        ];


        $data = array(
            'name' => $request->name." has a question about;"." email: ". $request->email,
            'message' => $request->message
        );

        Mail::to('prekshapatel81@gmail.com')->send(new SendMail($data));
        return redirect()->back()->with('flash_message', 'Thank you for your message');
    }
}
