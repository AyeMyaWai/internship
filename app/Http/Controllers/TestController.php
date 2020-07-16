<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
class TestController extends Controller
{
    //
    public function forgetpw(){
        $data = array('name'=>"Virat Gandhi");
   
        Mail::send('test', $data, function($message) {
           $message->to('capital.ayemyawai@gmail.com', 'Tutorials Point')->subject
              ('Laravel Basic Testing Mail');
           $message->from('team3.survey@gmail.com','Virat Gandhi');
        });
        echo "Basic Email Sent. Check your inbox.";
     
    }
}
