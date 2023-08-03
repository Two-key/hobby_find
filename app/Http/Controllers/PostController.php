<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class PostController extends Controller
{
    public function post_create()
{
    return view('second.post_create');
}
 public function group_content(Post $post)
    {
        return view('second.group_content')->with(['posts' => $post->getByLimit()]);  
    }
}