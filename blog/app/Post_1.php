<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;
    protected $date = ['deleted_at'];
    // default table is posts <-- post
    // protected $table = 'posts';
    // protected $primaryKey = 'id';
    protected $fillable = [
        'title',
        'content'
    ];

    // public function user(){
    //     return $this->belongsTo(User::class);
    // }

    // public function photos(){
    //     return $this->morphMany(Photo::class,'imageable');
    // }

    // public function Tags(){
    //     return $this->morphToMany(Tag::class,'taggable');
    // }


}
