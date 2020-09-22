<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table='categories';
    protected $fillable=['title','designs','showabovehome','statusshowhome','homeimage','iconimage','sidebarimage','bannerimage'];
    public function Games()
    {
        return $this->belongsToMany('App\Game');
    } 
    public function Gamescount()
    {
        return $this->belongsToMany('App\Game')->count();
    } 
}
