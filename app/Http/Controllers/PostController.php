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
    public function postCreate(Post $post, Group $group)
    {
        return view('leader_func.post_create')->with(['posts' => $post, 'group' => $group]);
    }
    
    public function groupContent(Group $group, Post $post)
    {
        return view('follower_func.group_content')->with(['group' => $group, 'posts' => $post->get()]);  
    }
    
    public function postStore(Post $post, PostRequest $request, Group $group)
    {
        $input = $request['post'];
        $input += array('group_id'=> $group->id);
        $image_url = Cloudinary::upload($request->file('post.image')->getRealPath())->getSecurePath();
        $input += ['image_url' => $image_url];
        $post->fill($input)->save();
        
        return redirect('/');
    }
    
    public function postEdit(Post $post)
    {
        return view('leader_func.post_edit')->with(['post' => $post]);
    }
    
    public function postUpdate(PostRequest $request, Post $post, Group $group)
    {
        $input = $request['post'];
        
        // 画像のアップロードとそのURLの取得
        $image_url = Cloudinary::upload($request->file('post.image')->getRealPath())->getSecurePath();
        $input += ['image_url' => $image_url];
        // 投稿を更新
        $post->fill($input)->save();
        
        $input_post = $request['post'];
        $post->fill($input_post)->save();
        
        return redirect('/index/leader_create');
    }
    public function postDelete(Post $post)
    {
        $post->delete();
        return redirect('/');
    }
    public function leaderGroupShow(Post $post, Group $group)
    {
        return view('leader_func.leadergroup_show')->with(['posts' => $post->where('group_id', $group->id)->get(), 'group' => $group]);
    }
}