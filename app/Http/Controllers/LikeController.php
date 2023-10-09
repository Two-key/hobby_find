<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Group;
use App\Models\Like;
use Illuminate\Support\Facades\Auth;

class LikeController extends Controller
{
    public function like(Group $group, Request $request)
    {
        // 新しいLikeレコードを作成し、グループIDとユーザーIDを設定
        $like=new Like();
        $like->group_id=$request->group_id;
        $like->user_id=Auth::user()->id;
        $like->save();
        // 元のページにリダイレクト
        return back();
    }
}
