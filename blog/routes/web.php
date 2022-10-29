<?php

use App\Country;
use App\Photo;
use App\Post;
use App\Role;
use App\Tag;
use App\User;
use App\Video;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/contact',function(){
//     return 'contact us';
// });

// Route::get('/post/{name}/{id?}',function($id=null,$name){
//     return "post ${id} - ${name}";
// });

// Route::get('/admin/post/example',function(){
//    $url = route('admin');
//     return 'admin page '.$url;
//     //  return 'admin page ';
// })->name('admin');

// Route::get('/admin/login',function(){
//     return 'login page';
// });

// Route::redirect('/admin/login','/',301);

// Route::prefix('admin')->group(function(){
//     Route::get('/posts/example',function(){
//         return 'posts example';
//     });
//     Route::get('/login',function(){
//         return 'login page group';
//     });
// });




// =================================

// Route::get('/posts','PostsController@index');
// Route::post('/posts','PostsController@create');
// Route::delete('/posts','PostsController@delete');
// Route::patch('/posts','PostsController@patch');

// Route::resource('/posts', 'PostController');

// Route::get('/posts/{id?}','PostsController@index');
// Route::get('/show-view/{id}/{name}/{password}','PostsController@showMyView');
// Route::get('/contact','PostsController@contact');

Route::get('/insert', 'PostsController@insert');
// Route::get('/select','PostsController@select');
// Route::get('/update','PostsController@updatePost');
// Route::get('/delete','PostsController@deletePost');


// ======================================================

Route::get('posts', 'PostsController@getAllPosts');
Route::get('save-post', 'PostsController@savePost');
Route::get('update-post', 'PostsController@editPost');
Route::get('delete-post', 'PostsController@removePost');
Route::get('data-trash', 'PostsController@workWithTrash');
Route::get('restore-post', 'PostsController@restorePost');
Route::get('force-delete-post', 'PostsController@forceDelete');



// Eloquent Relationship :
// one to one :
// Route::get('/user/{id}/post', function () {
//     return User::find(1)->post;
// });

// Route::get('/post/{id}/user', function () {
//     return Post::find(1)->user;
// });


// one to many : 

// Route::get('/user/{id}/posts',function(){
//     return User::find(1)->posts;
// });


// many to many : 

// Route::get('/user/{id}/roles', function ($id) {
//     $user = User::find($id);
//     return $user->roles;
// });

// Route::get('/user/pivot', function () {
//     $user = User::find(1);
//     foreach ($user->roles as $role) {
//         echo $role->pivot->created_at;
//     }
// });


// has many through : 

// Route::get('/user/country', function () {
//     $country = Country::find(1);
//     return $country->posts;
//     foreach ($country->posts as $post) {
//         echo  $post->title;
//         echo '<br>';
//     }
// });


// polymorphic relationship : 
// one to many : 

// Route::get('user/photos', function () {
//     $user = User::find(1);
//     return $user->photos;
//     foreach ($user->photos as $photo) {
//         echo $photo->path;
//         echo '<br>';
//     }
// });

// Route::get('post/photos', function () {
//     $post = Post::find(1);
//     return $post->photos;
//     foreach ($post->photos as $photo) {
//         echo $photo->path;
//         echo '<br>';
//     }
// });

// Route::get('role/photos', function () {
//     $role = Role::find(1);
//     return $role->photos;
// });

// Route::get('photo/{id}/post', function ($id) {
//     $photo = Photo::find($id);
//     return $photo->imageable;
// });



// many to many :

// Route::get('post/tags', function () {
//     $post = Post::find(8);
//     return $post->tags;
// });
// Route::get('video/tags', function () {
//     $video = Video::find(1);
//     return $video->tags;
// });

// reverse :

// Route::get('tag/{id}/post', function ($id) {
//     $tag = Tag::find($id);
//     return $tag->posts;
// });
// Route::get('tag/{id}/video', function ($id) {
//     $tag = Tag::find($id);
//     return $tag->videos;
// });




// ============================


Route::get('user/{id}/post', function ($id) {
    $user = User::find($id);
    return $user->post;
});
Route::get('post/{id}/user', function ($id) {
    $post = Post::find($id);
    return $post->user;
});


Route::get('user/{id}/roles', function ($id) {
    $user = User::find($id);
    return $user->roles;
});

Route::get('role/{id}/users', function ($id) {
    $role = Role::find($id);
    return $role->users;
});


Route::get('country/{id}/posts', function ($id) {
    $country = Country::find($id);
    // return $country->posts;
    return $country->users;
});

Route::get('post/{id}/photo', function ($id) {
    $post = Post::find($id);
    return $post->photos;
});

Route::get('user/{id}/photo', function ($id) {
    $user = User::find($id);
    return $user->photos;
});
Route::get('tag/{id}/posts', function ($id) {
    $tag = Tag::find($id);
    return $tag->posts;
});
Route::get('tag/{id}/video', function ($id) {
    $tag = Tag::find($id);
    return $tag->videos;
});

Route::get('post/{id}/tag', function ($id) {
    $post = Post::find($id);
    return $post->tags;
});
Route::get('video/{id}/tag', function ($id) {
    $video = Video::find($id);
    return $video->tags;
});
