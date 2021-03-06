<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    use HasFactory;



    protected $properties = [
        'id',
        'customer_name',
        'customer_address',
        'registration_time',
        'delivery_time',
        'ordered_items',
        'payment_method'
    ];

    function __construct(){
        $this->properties=[];
    }
}
