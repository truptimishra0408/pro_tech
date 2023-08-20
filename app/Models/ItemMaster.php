<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemMaster extends Model
{
    use HasFactory;
    protected $table ='item_master';
    protected $fillable=[
        'grade_id',
        'type_id',
        'heat_no_id',
        'size',
        'bundle_per_piece',
        'approximate_quantity',
        'quantity_grand_total',
        'length',
        'usd',
        'exchange_price',
        'rupee_basic_rate',
        'twelve_percentage',
        'contract_no',
        'invoice'
    ];
}
