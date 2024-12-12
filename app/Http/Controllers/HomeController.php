<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    

    public function getHome(){
        
        return view('home.index');
    }

    public function getAbout(){
        return view('home.about');
    }


}
