<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equity extends Model
{
    use HasFactory;
    
    protected $fillable =[
        'symbol',
        'name_of_company',
        'series',
        'date_of_listing',
        'paid_up_value',
        'market_lot',
        'isin_number',
        'face_value'
    ];
}
