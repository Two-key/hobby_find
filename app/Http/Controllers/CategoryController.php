<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Group;

class CategoryController extends Controller
{
    public function index(Category $category)
    {
        // カテゴリーに関連するグループ一覧を取得し、ビューに渡す
        return view('follower_func.index')->with(['groups' => $category->get()]);
    }

    public function search(Category $category)
    {
         // カテゴリー一覧を取得し、検索ビューに渡す
        return view('follower_func.search')->with(['categories' => $category->get()]);
    }

    public function groupShow(Request $request)
    {
        // リクエストからカテゴリーIDを取得
        $categoryId = $request->input('category');

        if ($categoryId) {
             // 選択されたカテゴリーの情報を取得
            $selectedCategory = Category::find($categoryId);
        }
        // グループのクエリを作成
        $groups = Group::query();

        if ($categoryId) {
            // カテゴリーIDによるフィルタリングを適用
            $groups->where('category_id', $categoryId);
        }
        // フィルタリングされたグループ一覧を取得
        $filteredGroups = $groups->get();
        // グループ一覧ビューにデータを渡す
        return view('follower_func.group_show')->with(['groups' => $filteredGroups, 'category' => $selectedCategory]);
    }
}
