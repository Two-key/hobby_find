<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index(Category $category)
    {
        return view('first.index')->with(['groups' => $category->get()]);  

    }
    public function serch(Category $category)
    {
        return view('first.serch')->with(['categories' => $category->get()]);
        
    }
    public function group_show(Category $category)
    {
        return view('first.group_show')->with(['category' => $category]);
        
    }
    
}
