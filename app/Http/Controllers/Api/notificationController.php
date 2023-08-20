<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Notifications\masterNotification;
use Illuminate\Support\Facades\Auth;

class notificationController extends Controller
{
    public function __construct()
    {
    }
    public function post(Request $req)
    {
        $user = User::where('name','=',$req->input('to'))->first();
        $user->notify(new masterNotification($req->user(),'mail'));
        return response()->json('notification sent',200);
    }
    public function get(Request $req)
    {
        $user = User::where('id','=',$req->input('id'))->first();
        return response()->json($user->notifications);
    }
}
