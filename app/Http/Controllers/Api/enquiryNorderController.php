<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\OrderMaster;
use Illuminate\Http\Request;
use App\Models\EnquiryMaster;

class enquiryNorderController extends Controller
{
    public function __construct()
    {}
    public function getEnquiry(Request $req)
    {
        $res = EnquiryMaster::get();
        return response()->json($res,200);
    }
    public function putEnquiry(Request $req,$id)
    {
        $input = $req->input();
        $rec = EnquiryMaster::where('id','=',$id)->first();
        foreach($input as $ky => $val)
        {
            $rec->$ky = $val;
        }
        $rec->save();
    }
    public function postEnquiry(Request $req)
    {
        $input = $req->input();
        $rec = new EnquiryMaster();
        foreach($input as $ky => $val)
        {
            $rec->$ky = $val;
        }
        $rec->save();
    }
    public function deleteEnquiry(Request $req,$id)
    {
        $rec = EnquiryMaster::where('id','=',$id)->first();
        $rec->delete();
    }
    public function getOrder(Request $req)
    {
        $res = OrderMaster::get();
        return response()->json($res,200);
    }
    public function putOrder(Request $req,$id)
    {
        $input = $req->input();
        $rec = OrderMaster::where('id','=',$id)->first();
        foreach($input as $ky => $val)
        {
            $rec->$ky = $val;
        }
        $rec->save();
    }
    public function postOrder(Request $req)
    {
        $input = $req->input();
        $rec = new OrderMaster();
        foreach($input as $ky => $val)
        {
            $rec->$ky = $val;
        }
        $rec->save();
    }
    public function deleteOrder(Request $req,$id)
    {
        $rec = OrderMaster::where('id','=',$id)->first();
        $rec->delete();
    }
}