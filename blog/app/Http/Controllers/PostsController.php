<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id = null)
    {
        return "id is {$id}";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, $name, $password)
    {
        //
    }
    public function showMyView($id, $name, $password)
    {
        // return view('welcome');
        // return view('pages.myView')->with('id',$id);
        return view('pages.myView', compact('id', 'name', 'password'));
    }

    public function contact()
    {
        $peaple = ['Ali', 'Reza', 'Maryam', 'Sahar'];
        return view('pages.contact', compact('peaple'));
    }

    public function insert()
    {
        DB::insert("insert into posts (title,content) values(?,?)", ['post 2', 'post 2 content']);
    }
    public function select()
    {
        $posts = DB::select('select * from posts');
        return $posts;
    }
    public function updatePost()
    {
        $updatedPosts = DB::update('update posts set title="post 1 title updated" where id = ?', [1]);
        return $updatedPosts;
    }
    public function deletePost()
    {
        $deletedPosts = DB::delete('delete from posts where id = ?',[2]);
        return $deletedPosts;
    }

    // ===============================================================
    // ===============================================================
    // ===============================================================
    public function getAllPosts(){
        // $allPosts = Post::all();
        // $allPosts = Post::find(3);
        // $allPosts = Post::findOrFail(2);
        // $allPosts = Post::where('title','post 2')->take(1)->get();
        $allPosts = Post::where('title','post 2')->orderBy('id','desc')->take(2)->get();
        return $allPosts;
    }


    public function savePost(){
        // way one : 
        // $post = new Post();
        // $post->title = 'title : post number 7';
        // $post->content = 'content : post number 7';
        // $post->save();

        // way two :

        // POSt : $fillable
        Post::create(['title'=>'post title 8','content'=>'post content 8']);
    }

    public function editPost(){
        // way one : 
        $post = Post::findOrFail(6);
        $post->title = 'update title ...';
        $post->content = 'update content ...';
        $post->save();

        // way two :
        // $post = Post::where('id',5)->update(['title'=>'update title ...','content'=>'updated content']);    
        return $post;
    }

    public function removePost(){
        // $post = Post::where('id',4)->first();
        // $post->delete();
        // Post::destroy(3);
        // Post::destroy([6,5]);
        
        // soft delete : 

        $post = Post::where('id',7)->delete();
    }

    public function workWithTrash(){
        // $post = Post::all();
        // $post = Post::withTrashed()->get();
        $post =  Post::onlyTrashed()->where('is_admin',0)->get();
        return $post;
    }

    public function restorePost(){
        $post = Post::onlyTrashed()->where('id',7)->restore();
    }
    public function forceDelete(){
        $post = Post::withTrashed()->where('id',7)->forceDelete();
    }
}