<?php

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

Route::get('/posts/{id?}','PostsController@index');
Route::get('/show-view/{id}/{name}/{password}','PostsController@showMyView');
Route::get('/contact','PostsController@contact');