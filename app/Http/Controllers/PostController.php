<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class PostController extends Controller
{
    public function create(Category $category)
{
    return view('posts.create')->with(['categories' => $category->get()]);
}
}