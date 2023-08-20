<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use App\Models\ItemMaster;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class ItemController extends Controller
{
    public function __construct()
    {        
    }
    public function get(Request $req)
    {
        $res = ItemMaster::get();
        return response()->json($res,200);
    }
    public function put(Request $req,$id)
    {
        $input = $req->input();
        $rec = ItemMaster::where('id','=',$id)->first();
        foreach($input as $ky => $val)
        {
            $rec->$ky = $val;
        }
        $rec->save();
    }
    public function post(Request $req)
    {
        $input = $req->input();
        $rec = new ItemMaster();
        foreach($input as $ky => $val)
        {
            $rec->$ky = $val;
        }
        $rec->save();
    }
    public function delete(Request $req,$id)
    {
        $rec = ItemMaster::where('id','=',$id)->first();
        $rec->delete();
    }
}