<?php

namespace App\Http\Controllers;

use App\Models\Post;
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
        $posts = Post::all();
        return view('editingVideo', compact('posts'));
    }
    public function contact()
    {
        return view('contact');
    }
}
