<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {
        dd(Post::all());
    }

    public function create() {

        return view('posts.create');
        
    }

    public function store(Request $request) {
        $data = $request->all();
        $data['user_id'] = 1;
        $data['is_active'] = true;

        dd(Post::create($data));

        return back();
    }

    public function show($id) {
        dd(Post::findOrFail($id));
    }
}
