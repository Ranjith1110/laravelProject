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
    
}
