<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    use HasFactory;
    protected $fillable = [
        'src',
        'alt',
        'width',
        'height',
        'extension',
        'type',
        'type_id',
        'sort_no'
    ];
}
