<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table='products';
    protected $fillable=['title','link','description','price','offer_price','best_seller','image']; 
    public function categoriesproducts()
    {
       return $this->belongsToMany('App\CategoryProduct');
    }
}
