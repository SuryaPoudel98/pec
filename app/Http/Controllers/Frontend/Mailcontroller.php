<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Mailcontroller extends Controller
{
    public function contactpost(Request $request)
    {  
        $request->validate([
        'fname'=>'required',
        'lname'=>'required',
        'email'=>'required',
        'message'=>'required'
       ]);

       if($this->isOnline()){
       $mail_data = [
        'recipient' =>'info@pec.edu.np',
        'fromEmail'=>$request->email,
        'fromName'=>$request->fname,
        'fromLastname'=>$request->lname,
        'body'=>$request->message,
       ];
       \Mail::send('email-template',$mail_data, function($message) use ($mail_data){
         $message->to($mail_data['recipient'])->from($mail_data['fromEmail'],$mail_data['fromName'],$mail_data['fromLastname']);
       });
       
       return redirect()->back()->with('success', 'email sent!');


       }else{
        return redirect()->back()->withInput()->with('error', 'check your internet connection');
       }


    }
    public function isOnline($site = "https://youtube.com"){
        if(@fopen($site, "r")){
            return true;
        }else{
            return false;
        }
    }
}
