<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Group;
use App\Events\Message; // Messageモデルをインポート
use Illuminate\Support\Facades\Auth;

class TalkController extends Controller
{
    public function group_talk(Request $request, Group $group) // Requestオブジェクトを引数に追加
    {
        // リクエストからユーザー名とメッセージを取得
        $username = $request->input('username');
        $message = $request->input('message');
        
        // App\Events\Messageをインスタンス化する際に2つの引数を渡す
        $messageEvent = new Message($username, $message);
        
        broadcast($messageEvent)->toOthers();
        
        return view('third.group_talk')->with(['groups' => $group]);
    }
}

