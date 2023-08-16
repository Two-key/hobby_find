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
    public function group_content(Request $request, Group $group, Like $like, User $user, Post $post)
    {
        $reviews = Group::withCount('likes')->orderBy('id', 'desc')->paginate(10);
        $param = ['group' => $group,];
        return view('second.group_content', $param);
        
        //$like->where('user_id', $user->id)->where('group_id', $group->id)->get();
        return view('second.group_content', compact('group', 'like'))->with(['group' => $group, 'posts' => $group->posts()->get()]);
    }
    /*public function group_join(Join $join)
    {
    return view('second.group_join')->with(['joins' => $join->get()]);
        
    }
    public function user_join(Join $join, Group $group, User $user)
    {
    $join->group_id = $group->id;
    $join->user_id = \Auth::id(); 
    $join->save();
    }*/
    
    /*public function user_like(Like $like, Group $group, User $user)
    {
    $like->group_id = $group->id;
    $like->user_id = \Auth::id(); 
    $like->save();
    $like->where('user_id', $user_id)->where('group_id', $group_id)->get();
    return redirect('/group_show/' .$group->id);
    }*/
    
    public function like(Request $request)
    {
    $user_id = Auth::user()->id; //1.ログインユーザーのid取得
    $group_id = $request->review_id; //2.投稿idの取得
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
    $review_likes_count = Group::withCount('likes')->findOrFail($group_id)->likes_count;
    $param = [
        'group_likes_count' => $group_likes_count,
    ];
    return response()->json($param); //6.JSONデータをjQueryに返す
}

}
