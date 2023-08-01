<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Group;

class GroupController extends Controller
{
    public function create_group(Category $category)
    {
        return view('posts.create_group')->with(['categories' => $category->get()]);
        
    }
    public function store(Request $request, Group $group)
    {
        $input = $request['group'];
        $group->fill($input)->save();
        return redirect('/groups/' . $group->id);
        
    }
    public function group_show(Group $group)
{
    return view('posts.group_show')->with(['groups' => $group->get()]);
 //'post'はbladeファイルで使う変数。中身は$postはid=1のPostインスタンス。
}
}
