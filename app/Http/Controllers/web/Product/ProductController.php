<?php

namespace App\Http\Controllers\Web\Product;

use Illuminate\Http\Request;
use App\Models\Equity;
use App\Jobs\import;
use App\Http\Controllers\Controller;

class ProductCategory extends Controller
{
    public function __construct()
    {}
    public function index()
    {
        return view('web.product.product');
    }
}