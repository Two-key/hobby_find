<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Group;
use App\Models\Post;

class GroupController extends Controller
{
    public function create_group(Category $category)
    {
        return view('first.create_group')->with(['categories' => $category->get()]);
        
    }
    public function store(Request $request, Group $group)
    {
        $input = $request['group'];
        $group->fill($input)->save();
        return redirect('/');
        
    }
    public function group_show(Group $group)
    {
    return view('first.group_show')->with(['groups' => $group->get()]);
        
    }
    public function group_content(Group $group)
    {
        //dd($group->posts()->get());
        
    return view('second.group_content')->with(['group' => $group, 'posts' => $group->posts()->get()]);
    }
}
