<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Group;
use App\Models\Message;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\MessageRequest;

class TalkController extends Controller
{
    public function sendMessage(Message $message,Request $request, Group $group)
    {
        $input = $request['message'];
        $input += array('group_id'=> $group->id);
        
        // ユーザーIDを取得してメッセージに追加
        $user = Auth::id();
        $input['user_id'] = $user;
        
        // メッセージを保存
        $message->fill($input)->save();
        
        // グループのトークページにリダイレクト
        return redirect()->route('groupTalk', ['group' => $group->id]);
    }
    public function groupTalk(Message $message, Group $group)
    {
        // グループに関連するメッセージを取得
        $messages = Message::where('group_id', $group->id)->get();
        
        // ログイン中のユーザーIDを取得
        $loggedInUserId = auth()->id();
        
        return view('leader_func.group_talk')->with(['messages' => $messages, 'group' => $group]);
    }
}

