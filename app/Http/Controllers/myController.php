<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class myController extends Controller
{
    public function about(){
        return view('about');
    }
    public function service(){
        return view('service');
    }
    public function case(){
        return view('caseStudy');
    }
    public function blog(){
        return view('blog');
    }
    public function contact(){
        return view('contact');
    }
    public function appointment(){
        return view('appointment');
    }
    public function index(){
        return view('index');
    }
}
