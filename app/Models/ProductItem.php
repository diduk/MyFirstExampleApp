<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductItem extends Model
{
    use HasFactory;

    protected $properties = [
        'id',
        'name',
        'details',
        'price',
        'payment_method'
    ];
}