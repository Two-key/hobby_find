<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Group;
use App\Models\Join;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class JoinController extends Controller
{
    public function user_join(Group $group, Request $request){
        $join=new Join();
        $join->group_id=$request->group_id;
        $join->user_id=Auth::user()->id;
        $join->save();
        return back();
    }
}
