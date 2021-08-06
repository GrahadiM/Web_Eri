<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::paginate(10);
        return view('admin.post', compact('posts'));
    }
    public function create()
    {
        //
    }
    public function store(Request $request)
    {
        $attr = $this->validate(request(), [
            'link' => 'required',
            'image' => 'required',
        ]);
        $img_req = request('image');
        $ekstName = time() . rand(100, 999) . "." . $img_req->getClientOriginalName();
        $img_req->move(public_path() . '/editing_images', $ekstName);
        $attr['image'] = $ekstName;
        Post::create($attr);
        return back()->with('success', 'Data berhasil di buat!');
    }
    public function show(Post $post)
    {
        //
    }
    public function edit(Post $post)
    {
        //
    }
    public function update(Request $request, Post $post)
    {
        //
    }
    public function destroy($id)
    {
        Post::findOrFail($id)->delete();
        return back()->with('success', 'Data di hapus!');
    }
}
