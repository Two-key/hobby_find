<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Category;
use App\Models\Group;
use App\Models\Post;
use App\Models\Join;
use App\Models\User;

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
    public function group_join(Join $join)
    {
    return view('second.group_join')->with(['joins' => $join->get()]);
        
    }
    public function user_join(Join $join, Group $group, User $user)
    {
    $join->group_id = $group->id;
    $join->user_id = \Auth::id(); 
    $join->save();
        
    }
    public function like(Like $like)
    {
    return view('second.like')->with(['likes' => $like->get()]);
        
    }
    public function user_like(Like $like, Group $group, User $user)
    {
    $like->group_id = $group->id;
    $like->user_id = \Auth::id(); 
    $like->save();
    }
}
