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
}
