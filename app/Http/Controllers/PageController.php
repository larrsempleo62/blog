<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \DB;

class PageController extends Controller
{
    
    public function about () {

         $users =  DB::table('users')->get();
    
        return view('about', compact('users'));        
    }

}

