<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AppConfig extends Model
{
    use HasFactory;
    protected $table = "app_configs";
    protected $primaryKey = "id";
    //protected $fillable = [];
    /*
    col structure key='colname', value array [
        'number/text/boolean/enum (default number)', if boolean => numeric values 0 or 1
        'size default if number bigint if text varchar(255)',
        'if text (type='single/munlitiline default single' ) / if enum (enum)array'
    ]

    (enum)array[
        'key'='value' key = colValue, value = DisplayText
    ]
    */


    public function getOrderItemStructure(){
        return [
            'order_id'=>[],
            'customer_name'=>['text'],
            'customer_address'=>['text'],
            'registration_time'=>['text'],
            'delivery_time'=>['text'],
            'ordered_items'=>['text'],
            'payment_method'=>['text']
        ];
    }

    public function getProductItemStructure(){
        return [
            'product_id'=>[],
            'name'=>['text'],
            'details'=>['text'],
            'price' => []
        ];

    }




}
