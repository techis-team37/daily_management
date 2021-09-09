<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;

    /**
     * 
     * 
     */
    protected $fillable = [
        'product_name',
        'image',
        'tag',
        'category',
        'stock',
        'best_by_date',
        'use_by_date'
    ];
}
