<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerFavoriteProduct extends Model
{
    use HasFactory;
    protected $table = 'customer_favorite_product';
    protected $fillable = [
        'customer_id',
        'product_id',
    ];
}
