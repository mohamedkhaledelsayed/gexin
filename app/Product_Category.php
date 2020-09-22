<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product_Category extends Model
{
    protected $table='category_product';
    protected $fillable=['product_id','category_product_id'];

}
