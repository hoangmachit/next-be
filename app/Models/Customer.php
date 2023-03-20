<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $table = 'customer';
    protected $fillable = [
        'sex_id',
        'job_id',
        'status_id',
        'name',
        'company_name',
        'post_code',
        'address',
        'email',
        'phone',
        'birth_day',
        'password',
        'salt',
        'buy_time',
        'buy_total',
        'point',
    ];
}
