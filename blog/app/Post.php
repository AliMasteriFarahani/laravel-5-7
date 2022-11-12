<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    function user(){
        return $this->belongsTo(User::class);
    }
    public function photos(){
        return $this->morphMany('App\Photo','imageable');
    }

    public function tags(){
        return $this->morphToMany('App\Tag','taggable');
    }
    
}
