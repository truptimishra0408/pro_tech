<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\CompanyMaster;
use Illuminate\Http\Request;

class companyController extends Controller
{
    public function __construct()
    {}
    public function getCompany(Request $req)
    {
        $res = CompanyMaster::get();
        return response()->json($res,200);
    }
    public function postCompany(Request $req)
    {
        $input = $req->input();
        $rec = new CompanyMaster();
        foreach($input as $ky => $val)
        {
            $rec->$ky = $val;
        }
        $rec->save();
    }
    public function putCompany(Request $req,$id)
    {
        $input = $req->input();
        $rec = CompanyMaster::where('id','=',$id)->first();
        foreach($input as $ky => $val)
        {
            $rec->$ky = $val;
        }
        $rec->save();
    }
    public function deleteCompany(Request $req,$id)
    {
        $rec = CompanyMaster::where('id','=',$id)->first();
        $rec->delete();
    }
}