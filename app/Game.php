<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    protected $table='games';
    protected $fillable=['title','link','description','price','offer_price','best_seller','image']; 
    public function categories()
    {
       return $this->belongsToMany('App\Category');
    }
    public function instructions()
    {
        return $this->hasMany('App\Instructions');
    }
}
