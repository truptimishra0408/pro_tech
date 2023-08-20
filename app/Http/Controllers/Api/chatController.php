<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Chat;
use App\Models\ChatMaster;
use Illuminate\Http\Request;

class chatController extends Controller
{
    public function __construct()
    {}
    public function getChats(Request $req)
    {
        $res = Chat::get();
        return response()->json($res,200);
    }
    public function postChats(Request $req)
    {
        $input = $req->input();
        $rec = new Chat();
        foreach($input as $ky => $val)
        {
            $rec->$ky = $val;
        }
        $rec->save();
    }
    public function deleteChats(Request $req,$id)
    {
        $rec = Chat::where('id','=',$id)->first();
        $rec->delete();
    }
    public function getChatsMaster(Request $req)
    {
        $res = ChatMaster::get();
        return response()->json($res,200);
    }
    public function postChatsMaster(Request $req)
    {
        $input = $req->input();
        $rec = new ChatMaster();
        foreach($input as $ky => $val)
        {
            $rec->$ky = $val;
        }
        $rec->save();
    }
    public function deleteChatsMaster(Request $req,$id)
    {
        $rec = ChatMaster::where('id','=',$id)->first();
        $rec->delete();
    }
}