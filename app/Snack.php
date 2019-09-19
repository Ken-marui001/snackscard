<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Snack extends Model
{
    public function comments(){
        return $this->hasMany('App\Comment');
    }

    public function users(){
        return $this->belongsToMany('App\User');
    }
}
