<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\Group;

class CategoryController extends Controller
{
    public function index(Category $category)
    {
        return view('first.index')->with(['groups' => $category->get()]);  

    }
    public function search(Category $category)
    {
        return view('first.search')->with(['categories' => $category->get()]);
        
    }
    public function group_show(Request $request)
    {
        $categoryId = $request->input('category');
        
        if ($categoryId) {
            $selectedCategory = Category::find($categoryId); // 選択されたカテゴリーの情報を取得
        }
        $groups = Group::query();
        
        if ($categoryId) {
            $groups->where('category_id', $categoryId);
        }

        $filteredGroups = $groups->get();
        return view('first.group_show')->with(['groups' => $filteredGroups, 'category'=> $selectedCategory]);
    }
    
}
