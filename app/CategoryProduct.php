<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoryProduct extends Model
{
    protected $table='categoryproducts';
    protected $fillable=['title','description','showhomepage','image'];
    public function products()
    {
        return $this->belongsToMany('App\Product');
    } 
    public function productcount()
    {
        return $this->belongsToMany('App\Product')->count();
    } 
}
