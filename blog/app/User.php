<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];



    public function post(){
        return $this->hasMany(Post::class);
    }

    public function roles(){
        return $this->belongsToMany(Role::class);
    }

    public function country(){
        return $this->belongsTo(Country::class);
    }

    public function photos(){
        return $this->morphOne('App\Photo','imageable');
    }


    // public function post(){
    //     return $this->hasOne(Post::class);
    //     // return $this->hasOne(Post::class,'user_id');
    // }

    // public function posts(){
    //     return $this->hasMany(Post::class);
    // }

    // public function roles(){
    //     return $this->belongsToMany(Role::class)->withPivot('created_at','updated_at');
    //     // return $this->belongsToMany(Role::class,'role_user','role_id','user_id');
    // }

    // public function photos(){
    //     return $this->morphOne(Photo::class,'imageable');
    //     // return $this->morphMany(Photo::class,'imageable');
    // }
}
