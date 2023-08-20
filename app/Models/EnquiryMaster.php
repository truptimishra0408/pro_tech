<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EnquiryMaster extends Model
{
    use HasFactory;
    protected $table ='enquiry_master';
    protected $fillable = [
        'user_id',
        'company_id',
        'item_master_id',
        'quantity',
        'comment'
    ];
}
