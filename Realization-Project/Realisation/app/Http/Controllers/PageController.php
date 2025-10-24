<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function home(){
        return view('home');
    }

    public function about(){
        return view('Pages.About');
    }

    public function projects(){
        return view('Pages.Projects');
    }

    public function projectDetails(){
        return view('Pages.ProjectDetails');
    }
}