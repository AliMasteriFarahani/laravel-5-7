<?php

use App\Country;
use App\Post;
use App\Role;
use App\Tag;
use App\User;
use App\Video;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;

Route::get('/posts', function () {
    $user = User::find(1);
    return $user->post;
});


Route::get('user/{id}/roles', function ($id) {
    $user = User::find($id);
    return $user->roles;
});

Route::get('role/{id}/users', function ($id) {
    $role = Role::find($id);
    return $role->users;
});


// has many through :

Route::get('country/{id}/post', function ($id) {
    $country = Country::find($id);
    return $country->posts;
});

Route::get('post/{id}/photos', function ($id) {
    $post = Post::find($id);
    return $post->photos;
});

Route::get('user/{id}/photos', function ($id) {
    $user = User::find($id);
    return $user->photos;
});

Route::get('video/{id}/tags', function ($id) {
    $video = Video::find($id);
    return $video->tags;
});

Route::get('post/{id}/tags', function ($id) {
    $post = Post::find($id);
    return $post->tags;
});

Route::get('tag/{id}/posts', function ($id) {
    $tag = Tag::find($id);
    return $tag->posts;
});

Route::get('tag/{id}/videos', function ($id) {
    $tag = Tag::find($id);
    return $tag->videos;
});