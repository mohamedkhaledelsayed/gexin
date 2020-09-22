<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PayMentGateWay extends Model
{
    protected $table='pay_ment_gate_ways';
    protected $fillable=['title','image'];
}
