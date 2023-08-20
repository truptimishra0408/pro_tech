<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Models\Equity;
use App\Http\Controllers\Controller;

class SampleController extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth');
    }

    public function json(Request $request)
    {
        $res = Equity::paginate($_GET['pageSize']);
        // $res = Equity::get();
        return response()->json($res,200);
    }
    public function jsonx(Request $request)
    {
        $res = Equity::get();
        return response()->json($res,200);
    }
    public function pdf(Request $request)
    {
        return response()->file('D:\research\m_sc.pdf');
    }
}
