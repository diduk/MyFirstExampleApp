<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductMeta extends Model
{
    use HasFactory;

    protected $table = "product_meta";
    protected $primaryKey = "id";
    protected $fillable = ['product_id','col_name','data_string','data_num'];
}
