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
        $like=new Like();
        $like->group_id=$request->group_id;
        $like->user_id=Auth::user()->id;
        $like->save();
        return back();
    }
    
}
