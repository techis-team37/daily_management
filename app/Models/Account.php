<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;

    /**
     * 
     * @ver array
     */
    protected $fillable = [
        'account_name',
        'email',
        'password',
    ];
}
