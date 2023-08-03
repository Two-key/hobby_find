<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Group;

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
    return view('second.group_content')->with(['groups' => $group->get()]);
    }
}
