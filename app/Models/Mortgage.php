<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mortgage extends Model
{
    protected $fillable = [
        'title',
        'is_active',
        'description',
        'percent',
        'min_first_payment',
        'max_price',
        'min_price',
        'min_term',
        'max_term',
    ];

    public $timestamps = false;
}