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
use App\Http\Requests\GroupRequest;
use Cloudinary;

class GroupController extends Controller
{
    public function leaderCreate()
    {
        // ログインユーザーの所属グループを取得してビューに渡す
        $user = Auth::user();
        $groups = $user->groups()->get();
        
        return view('follower_func.leader_create')->with(['groups' => $groups]);
    }
    
    public function createGroupPage(Category $category)
    {
        // カテゴリー情報をビューに渡して、グループ作成ページを表示
        return view('follower_func.create_group')->with(['categories' => $category->get()]);
    }
    public function groupStore(GroupRequest $request, Group $group, User $user, Join $join)
    {
        //Cloudinaryから画像urlを取得し、$inputに追加
        $input = $request['group'];
        $image_url = Cloudinary::upload($request->file('group.image')->getRealPath())->getSecurePath();
        $input += ['image_url' => $image_url]; 
        //ログインユーザーidを取得し、$inputに追加、$groupにその値を追加
        $input['user_id'] = Auth::id();
        $group->fill($input)->save();
        //$join インスタンスを作成し、それに group_id と user_id を設定し、保存
        $join = new Join();
        $join->group_id = $group->id;
        $join->user_id = Auth::user()->id;
        $join->save();
    
        return redirect('/');
    }
    public function showGroupContent(Request $request, Group $group, Like $like, Post $post)
    {
        // 最新のグループ評価を取得し、ページネーションで表示
        $reviews = Group::withCount('likes')->orderBy('id', 'desc')->paginate(10);
        // ビューに渡すパラメーターの設定
        $param = ['group' => $group,];
        $user = Auth::user();
        $group_id = $request->group_id;
        // グループに関連する投稿情報を取得
        $posts = $group->posts()->get();
        // ビューにデータを渡して表示
        return view('follower_func.group_content', compact('group', 'like', 'posts', 'user'));
    }
    
    public function userJoin(Join $join, Group $group, Request $request)
    {
        $user = Auth::user();
        // 参加または解除対象のグループIDを取得
        $group_id = $group->id;
        // ユーザーがすでに指定のグループに参加しているかを確認
        $joined=$user->isJoined($group_id);
        
        if (!$joined) {
            // ユーザーがまだ参加していない場合
             
            // 新しいJoinレコードを作成してデータベースに保存
            Join::create([
                'group_id'=> $group->id, 
                'user_id'=>\Auth::user()->id,
            ]);
        } else {
            // ユーザーがすでに参加している場合
            
            // ユーザーの参加を解除するため、該当のJoinレコードを削除
            Join::where('group_id', $group_id)->where('user_id', $user->id)->delete();
        }
            // 参加または解除処理が完了したら、該当のグループの詳細ページにリダイレクト
            return redirect('/group_show/' . $group->id);
    }
    
    public function showGroupJoinPage(Join $join)
    {
        $userId = \Auth::id();
        // ユーザーが参加しているJoinレコードを取得
        $joins = Join::where('user_id', $userId)->get();
        // 参加しているグループの情報を格納する配列
        $groups = [];
        // ユーザーが参加している各グループを取得し、配列に追加
        foreach ($joins as $join) {
            $group = Group::where('id', $join->group_id)->first();
            $groups[] = $group;
        }
            return view('follower_func.group_join')->with(['groups' => $groups]);
        }
    
    public function showGroupLikePage(Request $request)
    {
        $userId = \Auth::id();
        // ユーザーが「いいね」したグループの取得
        $likes = Like::where('user_id', $userId)->get();
        $groups = [];
    // ユーザーが「いいね」したグループの詳細情報を取得
    foreach ($likes as $like) {
        $group = Group::where('id', $like->group_id)->first();
        $groups[] = $group;
    }
        // ビューにデータを渡して「いいね」したグループを表示
        return view('follower_func.like')->with(['groups' => $groups]);
    }
    
    public function like(Request $request)
    {
        $user_id = Auth::user()->id;
        $group_id = $request->group_id;
        // ユーザーが既に「いいね」しているかを確認
        $already_liked = Like::where('user_id', $user_id)->where('group_id', $group_id)->first();
        if (!$already_liked) {
             // まだ「いいね」していない場合、新しい「いいね」を作成
            $like = new Like;
            $like->group_id = $group_id;
            $like->user_id = $user_id;
            $like->save();
        } else {
            // 既に「いいね」している場合、「いいね」を取り消す
            Like::where('group_id', $group_id)->where('user_id', $user_id)->delete();
    }
        // グループの「いいね」数を取得
        $group_likes_count = Group::withCount('likes')->findOrFail($group_id)->likes_count;
        // レスポンスデータを作成して返す
        $param = [
            'group_likes_count' => $group_likes_count,
    ];
        return response()->json($param);
    }
    
    public function showGroupEditPage(Group $group, Category $category)
    {
        // グループの編集ページを表示するために、グループ情報とカテゴリー情報をビューに渡す
        return view('leader_func.group_edit')->with(['group' => $group, 'categories' => $category ->get()]);
    }
    
    public function updateGroup(GroupRequest $request, Group $group)
    {
        // フォームからの入力を取得
        $input = $request['group'];
        
        // 画像のアップロードとそのURLの取得
        $image_url = Cloudinary::upload($request->file('group.image')->getRealPath())->getSecurePath();
        $input += ['image_url' => $image_url];
        
        $user = Auth::id();
        $input['user_id'] = $user;
        
         // グループ情報を更新
        $group->fill($input)->save();

        return redirect('/index/leader_create');
    }
    
    public function deleteGroup(Group $group)
    {
        // グループをデータベースから削除
        $group->delete();
        return redirect('/');
    }

}
