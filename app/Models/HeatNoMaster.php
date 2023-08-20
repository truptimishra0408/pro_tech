<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HeatNoMaster extends Model
{
    use HasFactory;
    protected $table ='heat_no_master';
    protected $fillable=[
        'heat_no'
    ];
}