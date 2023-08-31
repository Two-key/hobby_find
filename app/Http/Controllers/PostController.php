<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Post;
use App\Models\Group;
use App\Http\Requests\PostRequest;
use Cloudinary; 

class PostController extends Controller
{
    public function post_create(Post $post, Group $group)
    {
        return view('second.post_create')->with(['posts' => $post, 'group' => $group]);
    }
    
    public function group_content(Group $group, Post $post)
    {
        return view('second.group_content')->with(['group' => $group, 'posts' => $post->get()]);  
    }
    
    public function store(Post $post, PostRequest $request, Group $group)
    {
        $input = $request['post'];
        $input += array('group_id'=> $group->id);
        $image_url = Cloudinary::upload($request->file('image')->getRealPath())->getSecurePath();
        $input += ['image_url' => $image_url];
        $post->fill($input)->save();
        return redirect('/');
    }
    
    public function post_edit(Post $post)
    {
        return view('management.post_edit')->with(['post' => $post]);
    }
    
    public function post_update(PostRequest $request, Post $post)
    {
        $input_post = $request['post'];
        $post->fill($input_post)->save();
        return redirect('/index/leader_create');
    }
    public function post_delete(Post $post)
    {
        $post->delete();
        return redirect('/');
    }
    public function leadergroup_show(Post $post, Group $group)
    {
        return view('management.leadergroup_show')->with(['posts' => $post->where('group_id', $group->id)->get(), 'group' => $group]);
    }
}