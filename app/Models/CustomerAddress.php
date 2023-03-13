<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerAddress extends Model
{
    use HasFactory;
    protected $fillable = [
        'customer_id',
        'country_ud',
        'name',
        'company_name',
        'post_code',
        'address',
        'email',
        'phone',
    ];
}
