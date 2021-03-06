<?php

namespace App;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Pizza extends Model
{
    use SoftDeletes;
    protected $guarded = ['id']; 
    //
    public function orders()
    {
        return $this->belongsToMany('App\Order')->withPivot(['quantity']);
    }
}
