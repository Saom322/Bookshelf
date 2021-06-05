<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
     function sendEmail($email,$name)
    {
      
          $details=[
            'title'=>$name,
            'body'=> 'Start your Book sharing Journey with us'
        ];

        Mail::to($email)->send(new TestMail($details));
        return redirect('home');
        
    }
}
