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

    public function category()
    {
        return $this->hasOne('App\Product');
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
        'account_id'
    ];

    /**
     * ネイティブなタイプへキャストする属性
     *
     * @var array
     */
    protected $casts = [
        'account_id' => 'string',
    ];


    public $incrementing = false;
    protected $primaryKey = 'product_id';
}
