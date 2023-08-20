<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\CategoryMaster;
use App\Models\GradeMaster;
use Illuminate\Http\Request;

class categoryNgradeController extends Controller
{
    public function __construct()
    {}
    public function getCatergory(Request $req)
    {
        $res = CategoryMaster::get();
        return response()->json($res,200);
    }
    public function postCatergory(Request $req)
    {
        $input = $req->input();
        $rec = new CategoryMaster();
        foreach($input as $ky => $val)
        {
            $rec->$ky = $val;
        }
        $rec->save();
    }
    public function putCatergory(Request $req,$id)
    {
        $input = $req->input();
        $rec = CategoryMaster::where('id','=',$id)->first();
        foreach($input as $ky => $val)
        {
            $rec->$ky = $val;
        }
        $rec->save();
    }
    public function deleteCatergory(Request $req,$id)
    {
        $rec = CategoryMaster::where('id','=',$id)->first();
        $rec->delete();
    }
    public function getGrade(Request $req)
    {
        $res = GradeMaster::get();
        return response()->json($res,200);
    }
    public function postGrade(Request $req)
    {
        $input = $req->input();
        $rec = new GradeMaster();
        foreach($input as $ky => $val)
        {
            $rec->$ky = $val;
        }
        $rec->save();
    }
    public function putGrade(Request $req,$id)
    {
        $input = $req->input();
        $rec = GradeMaster::where('id','=',$id)->first();
        foreach($input as $ky => $val)
        {
            $rec->$ky = $val;
        }
        $rec->save();
    }
    public function deleteGrade(Request $req,$id)
    {
        $rec = GradeMaster::where('id','=',$id)->first();
        $rec->delete();
    }
}