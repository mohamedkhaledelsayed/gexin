<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Instructions extends Model
{
    protected $table="instructions";
    protected $fillable=['title','descrption','image'];
    public function game()
    {
        return $this->belongsTo('App\Game');
    }
}
