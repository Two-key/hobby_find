<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Group;
use App\Models\Like;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class LikeController extends Controller
{
    public function like(Group $group, Request $request){
        $like=New Like();
        $like->group_id=$group->id;
        $like->user_id=Auth::user()->id;
        $like->save();
        return back();
    }
    public function unlike(Group $group, User $user, Request $request){
        $user=Auth::user()->id;
        $like=Like::where('group_id', $group->id)->where('user_id', $user)->first();
        $like->delete();
        return back();
    }
}
