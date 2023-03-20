<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Collection extends Model
{
    use HasFactory;
    protected $table = 'collection';
    protected $fillable =[
        'parent_id',
        'name',    
        'slug',
        'description',
        'content',
        'type',
        'status_id',
        'language_id'
    ];
}
