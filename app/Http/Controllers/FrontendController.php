<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function designGrafis()
    {
        return view('designGrafis');
    }
    public function editingVideo()
    {
        return view('editingVideo');
    }
    public function contact()
    {
        return view('contact');
    }
    // public function index()
    // {
    //     //
    // }
}
