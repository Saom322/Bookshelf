<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Models\Review;
use DB;

class ReviewController extends Controller
{
    function addreview(Request $req)
    {
        switch($req->input('action')){
        case 'add':
        $data=new Review();
        $data->Name=$req->Name;
        $data->User_Name=$req->User;
        $data->Review=$req->Review;
        $data->save();
        return redirect('home');
        break;
        case 'search':
            $name= $req->Name;
           $dd=DB::table('reviews')->where('Name','like','%'.$name.'%')->get();
           $result = json_decode($dd, true); 
           return view('review',['reviews'=>$result]);
            break;
}

    }

    function searchreview(Request $req)
    {
        $name= $req->Name;
        $dd=DB::table('reviews')->where('Name','like','%'.$name.'%')->get();
        $result = json_decode($dd, true); 
        return view('review',['reviews'=>$result]);   
    }
}
