<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Group;
use App\Models\Message;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\MessageRequest;

class TalkController extends Controller
{
    public function send_message(Message $message,Request $request, Group $group)
    {
        $input = $request['message'];
        $input += array('group_id'=> $group->id);
        $user = Auth::id();
        $input['user_id'] = $user;
        $message->fill($input)->save();
        return redirect()->route('group_talk', ['group' => $group->id]);
    }
    public function group_talk(Message $message, Group $group)
    {
        $messages = Message::where('group_id', $group->id)->get();
        return view('third.group_talk')->with(['messages' => $messages, 'group' => $group]);
    }
}

