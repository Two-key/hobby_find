<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Category;
use App\Models\Group;
use App\Models\Post;
use App\Models\Join;
use App\Models\User;
use App\Models\Like;
use App\Models\Leader;

class GroupController extends Controller
{
    public function leader_create()
    {
        $user = Auth::user();
        $groups = $user->groups()->get();
        
        return view('first.leader_create')->with(['groups' => $groups]);
        
    }
    
    public function create_group(Category $category)
    {
        return view('first.create_group')->with(['categories' => $category->get()]);
        
    }
    public function store(Request $request, Group $group, User $user, Join $join)
    {
        $input = $request['group'];
        $user = Auth::id();
        $input['user_id'] = $user;
        $group->fill($input)->save();
        $input = $request['group_id'];
        $join=new Join();
        $join->group_id=$request->group_id;
        $join->user_id=Auth::user()->id;
        $join->save();
        
        return redirect('/group_show/' . $group->id, $join->id);
        
    }
    public function group_show(Group $group)
    {
    return view('first.group_show')->with(['groups' => $group->get()]);
        
    }
    public function group_content(Request $request, Group $group, Like $like, Post $post)
    {
        $reviews = Group::withCount('likes')->orderBy('id', 'desc')->paginate(10);
        $param = ['group' => $group,];
        $user = Auth::user();
        $group_id = $request->group_id;
        //$joined=$user->isJoined($group_id);
        //return view('second.group_content', $param);
        $posts = $group->posts()->get();
        //$like->where('user_id', $user->id)->where('group_id', $group->id)->get();
        return view('second.group_content', compact('group', 'like', 'posts', 'user'));
    }
    
    public function user_join(Join $join, Group $group, Request $request)
    {
        $user = Auth::user();
        $group_id = $group->id;
        $joined=$user->isJoined($group_id);
        
        if (!$joined) {
            
            //$join=new Join();
            //$join->group_id=$group->id;
            //$join->user_id=Auth::user()->id;
            //return $join;
             Join::create([
                'group_id'=> $group->id, 
                'user_id'=>\Auth::user()->id,
            ]);
           
        } else {
            Join::where('group_id', $group_id)->where('user_id', $user->id)->delete();
            }
            //$join->save();
            return redirect('/group_show/' . $group->id);
    }
    
    public function group_join(Join $join)
    {
        $userId = \Auth::id();
        $joins = Join::where('user_id', $userId)->get();
        $groups = []; // 空の配列を初期化

    foreach ($joins as $join) {
        $group = Group::where('id', $join->group_id)->first();
        $groups[] = $group; // 配列に追加
    }
        return view('second.group_join')->with(['groups' => $groups]);
    }
    
    //*public function user_join(Request $request)
    //{
    //$user_id = Auth::user()->id; //1.ログインユーザーのid取得
    //$group_id = $request->review_id; //2.投稿idの取得
   // $already_joined = Join::where('user_id', $user_id)->where('group_id', $group_id)->first(); //3.

    //if (!$already_joined) { //もしこのユーザーがこの投稿にまだいいねしてなかったら
       // $join = new Like; //4.Likeクラスのインスタンスを作成
        //$join->group_id = $group_id; //Likeインスタンスにreview_id,user_idをセット
        //$join->user_id = $user_id;
       // $join->save();
    //} else { //もしこのユーザーがこの投稿に既にいいねしてたらdelete
       // Join::where('group_id', $group_id)->where('user_id', $user_id)->delete();
    //}
    //5.この投稿の最新の総いいね数を取得
    //$review_likes_count = Group::withCount('likes')->findOrFail($group_id)->likes_count;
    //$param = [
        //'group_likes_count' => $group_likes_count,
    //];
   // return response()->json($param); //6.JSONデータをjQueryに返す
    //}
    
    public function group_like(Request $request)
    {
        $userId = \Auth::id();
        $likes = Like::where('user_id', $userId)->get();
        $groups = []; // 空の配列を初期化

    foreach ($likes as $like) {
        $group = Group::where('id', $like->group_id)->first();
        $groups[] = $group; // 配列に追加
    }
        return view('second.like')->with(['groups' => $groups]);
        
    }
    
    public function like(Request $request)
    {
        $user_id = Auth::user()->id; //1.ログインユーザーのid取得
        $group_id = $request->group_id; //2.投稿idの取得
        $already_liked = Like::where('user_id', $user_id)->where('group_id', $group_id)->first(); //3.
        if (!$already_liked) { //もしこのユーザーがこの投稿にまだいいねしてなかったら
            $like = new Like; //4.Likeクラスのインスタンスを作成
            $like->group_id = $group_id; //Likeインスタンスにreview_id,user_idをセット
            $like->user_id = $user_id;
            $like->save();
        } else { //もしこのユーザーがこの投稿に既にいいねしてたらdelete
            Like::where('group_id', $group_id)->where('user_id', $user_id)->delete();
    }
    //5.この投稿の最新の総いいね数を取得
        $group_likes_count = Group::withCount('likes')->findOrFail($group_id)->likes_count;
        $param = [
            'group_likes_count' => $group_likes_count,
    ];
    return response()->json($param); //6.JSONデータをjQueryに返す
    }
    
    public function group_edit(Group $group, Category $category)
    {
    return view('management.group_edit')->with(['group' => $group, 'categories' => $category->get()]);
    }
    
    public function group_update(Request $request, Group $group)
    {
        //dd($request);
    $input_group = $request['group'];
    $group->fill($input_group)->save();

    return redirect($group->id);
    }
    
    public function group_delete(Group $group)
    {
    $group->delete();
    return redirect('/');
    }

}
