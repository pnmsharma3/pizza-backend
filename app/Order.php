<?php

namespace App;
use Illuminate\Database\Eloquent\SoftDeletes;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use SoftDeletes;
    protected $guarded = ['id']; 

    public function pizzas()
    {
        return $this->belongsToMany('App\Pizza')->withPivot(['quantity']);;
    }
}
