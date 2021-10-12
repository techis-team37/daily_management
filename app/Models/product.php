<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function accounts()
    {
        return $this->hasMany('App\Account');
    }

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
        'use_by_date',
    ];

    public $incrementing = false;
    protected $primaryKey = 'product_id';
}
