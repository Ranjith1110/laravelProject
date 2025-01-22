<?php

namespace App\Http\Controllers;

class WebsiteController extends Controller
{

    public function index()
    {
        return view('index');
    }
    public function aboutMamce()
    {
        return view('about-mamce');
    }
    public function historyMamce()
    {
        return view('history-mamce');
    }
    public function adminMamce()
    {
        return view('admin-mamce');
    }
    public function campus()
    {
        return view('campus');
    }
    public function placement()
    {
        return view('placement');
    }
    public function contact()
    {
        return view('contact');
    }


    // Departments/Ug
    public function civil()
    {
        return view('departments.ug.civil');
    }
    public function cse()
    {
        return view('departments.ug.cse');
    }
    public function eee()
    {
        return view('departments.ug.eee');
    }
    public function ece()
    {
        return view('departments.ug.ece');
    }
    public function eie()
    {
        return view('departments.ug.eie');
    }
    
}
