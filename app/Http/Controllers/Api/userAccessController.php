<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Models\UserAccess;
use App\Http\Controllers\Controller;

class userAccessController extends Controller
{
    public function __contruct()
    {
    }
    public function get(Request $req)
    {
        $res = UserAccess::get();
        return response()->json($res, 200);
    }
    public function put(Request $req, $id)
    {
        $input = $req->input();
        $rec = UserAccess::where('id', '=', $id)->first();
        foreach ($input as $ky => $val) {
            $rec->$ky = $val;
        }
        $rec->save();
    }
    public function post(Request $req)
    {
        $input = $req->input();
        $rec = new UserAccess();
        foreach ($input as $ky => $val) {
            $rec->$ky = $val;
        }
        $rec->save();
    }
    public function delete(Request $req, $id)
    {
        $rec = UserAccess::where('id', '=', $id)->first();
        $rec->delete();
    }
}
