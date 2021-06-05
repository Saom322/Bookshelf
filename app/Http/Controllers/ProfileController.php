<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Models\Profile;
use DB;

class ProfileController extends Controller
{
   protected $MailController;
   public function __construct(MailController  $MailController)
   {
       $this->MailController=$MailController;
   }
    function adddata(Request $req)
    {
        $data=new Profile();
        $data->Name=$req->Name;
        $name=$req->Name;
        $data->Password=$req->Password;
        $data->Email=$req->Email;
        $email=$req->Email;
        $data->ContactNumber=$req->Contact;
        $data->save();
        $d=$this->MailController->sendEmail($email,$name);
        return $d;
        //return redirect('home');
    }
    function getdata(Request $req){
        $name= $req->Name;
        $pass=$req->Password;
        $data= DB::table('profiles')->where('Name',$name)->value('Password');
        $res=strcmp($pass,$data);
        if($res==0)
       {$v='profile';
        return view($v); }
        if($res!=0)
            {return view('error');
        }

    }
}
