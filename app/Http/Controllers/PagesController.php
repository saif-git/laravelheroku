<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //

    public function index(){
        $name='index';
         return view('pages.index')->with('name',$name);
        
    }

    public function about(){
        return view('pages.about');
       
   }


   public function prolanguage(){
       $myname= array('name'=>'saif' ,'c'=>'c++','py'=>'python','j'=>'java');

    return view('pages.prolanguage')->with('myname',$myname);
   
}


}
