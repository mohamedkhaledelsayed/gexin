<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category_Game extends Model
{
    protected $table="category_game";
    protected $fillable=['game_id','category_id'];

}
