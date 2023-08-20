<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Models\Equity;
use App\Jobs\import;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function home()
    {
        return view('web.home.home');
    }
    public function import(Request $request)
    {
        if($request->method()==='POST')
        {
        $destinationPath = storage_path().'/app/public';
        $name = date('d_m_Y_H_i_s').'.csv';
        $file = $request->file('file');
        $file->move($destinationPath,$name);
        import::dispatch('D:/xampp/htdocs/dummy/storage/app/public/'.$name);
        }
        return view('web.misc.import');
    }
    public function report()
    {
        $res = Equity::paginate(10);
        return view('web.misc.report')->with(['equity'=>$res]);
    }
  
}
