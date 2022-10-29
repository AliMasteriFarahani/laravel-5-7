<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    public function posts(){
        // return $this->hasManyThrough(Post::class,User::class);
        return $this->hasManyThrough('App\Post','App\User');
    }
    public function users(){
        return $this->hasMany(User::class);
    }
}