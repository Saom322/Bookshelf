<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
Use App\Models\Book;
use DB;
class BookController extends Controller
{
    function SearchBook(Request $req)
    {
          $name=$req->Name;
    
    $data= DB::table('books')->where('Name',$name)->value('View');
   
      if($data=='')
        return view('index');
        else{
             return view($data);
        }  
    }
    function Addbook(Request $req)
    {
      $data=new Book();
        $data->Name=$req->Name;
        
        $data->Author=$req->Author;

        $data->Decription=$req->Summary;

        $data->Pages=$req->Page;
        $data->Review=$req->Summary;

        $data->View=$req->Language;
        $data->save();
        return view('index');
    }
}
