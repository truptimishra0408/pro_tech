<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyMaster extends Model
{
    use HasFactory;
    protected $fillable = [
        'company',
        'address',
        'contact_primary',
        'contact_secondary',
        'email'
    ];
}
