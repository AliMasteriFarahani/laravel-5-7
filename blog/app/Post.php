<?php

namespace App;

use App\Post as AppPost;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $date = ['deleted_at'];
    // default table is posts <-- post
    // protected $table = 'posts';
    // protected $primaryKey = 'id';
    protected $fillable = [
        'title',
        'content'
    ];

    public function user(){
        return $this->belongsTo(Post::class);
    }

    public function posts(){
        return $this->hasManyThrough(Post::class,User::class);
    }

    public function photos(){
        return $this->morphMany('App\Photo','imageable');
    }

    public function tags(){
        return $this->morphToMany(Tag::class,'taggable');
    }

}