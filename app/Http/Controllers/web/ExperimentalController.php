<?php
namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;

class ExperimentalController extends Controller
{
    public function __construct()
    {}
    public function experimental()
    {
        return view('web.experimental.experimental');
    }
}