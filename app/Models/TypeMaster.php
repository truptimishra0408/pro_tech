<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeMaster extends Model
{
    use HasFactory;
    protected $table ='type_master';
    protected $fillable=[
        'type'
    ];
}
