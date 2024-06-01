<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view ('home.index');    
    }

    public function skill()
    {
        return view ('home.skill');    
    }

    public function portof()
    {
        return view ('home.portof');    
    }

    public function contact()
    {
        return view ('home.contact');    
    }

    public function about()
    {
        return view ('home.about');    
    }
}
