<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UsagePolicy extends Model
{
    protected $table='usage_policies';
    protected $fillable=['title','description','image'];
}
