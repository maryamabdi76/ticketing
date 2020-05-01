<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact')->with('success', '');
    }
    function send(Request $request)
    {
        $this->validate($request, [
            'name'     =>  'required',
            'email'  =>  'required|email',
            'message' =>  'required',
            'subject' =>  'required'
        ]);
        $data = array(
            'name'      =>  $request->name,
            'email'      =>  $request->email,
            'subject'      =>  $request->subject,
            'message'   =>   $request->message
        );

        Mail::to('maryamabdi9776@gmail.com')->send(new SendMail($data));
        return view('contact')->with('success','پیام شما با موفقیت ارسال شد!');
    }
}
