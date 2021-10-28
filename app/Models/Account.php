<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Account extends Model
{
    use HasFactory;

    public function product()
    {
        return $this->belongsTo('App\Product');
    }

    /**
     * 
     * @ver array
     */
    protected $fillable = [
        'account_name',
        'email',
        'password',
    ];

    protected $primarykey = 'account_id';
}
