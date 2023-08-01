<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index(Category $category)
    {
        return view('posts.index')->with(['categories' => $category->get()]);  
       //blade内で使う変数'posts'と設定。'posts'の中身にgetを使い、インスタンス化した$postを代入。
    }
    public function serch(Category $category)
    {
        return view('posts.serch')->with(['categories' => $category->get()]);
        
    }
    
}
