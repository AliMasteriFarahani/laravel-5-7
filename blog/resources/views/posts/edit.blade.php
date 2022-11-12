@extends('layouts.app')
@section('content')
    <h4>edit form</h4>
    {{-- @if(\Illuminate\Support\Facades\Auth::user()->can('update',$post)) --}}
    {{-- @can('update', $post) --}}
    {!! Form::model($post,['method'=>'PATCH','action'=>['PostsController@update',$post->id]]) !!}
    <div class="form-group">
        {!! Form::label('title','Title:') !!}
        {!! Form::text('title',$post->title,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('descriptions','Descriptions:') !!}
        {!! Form::textarea('descriptions',$post->content,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Update',['class'=>'btn btn-primary']) !!}
    </div>
{!! Form::close() !!}
    
    {{-- @elsecan('create', App\Models\Post::class) --}}

    {{-- @endcan --}}
    {{-- <form method="post" action="/posts/{{$post->id}}">
        <input type="hidden" name="_method" value="PATCH">
        @csrf
        <input type="text" name="title" value="{{$post->title}}">
        <input type="text" name="descriptions" value="{{$post->content}}">
        <button type="submit" name="submit">update</button>
    </form> --}}
    <br>
    {!! Form::model($post,['method'=>'DELETE','action'=>['PostsController@destroy',$post->id]]) !!}
       
    <div class="form-group">
        {!! Form::submit('Delete',['class'=>'btn btn-danger']) !!}
    </div>
{!! Form::close() !!}



    {{-- <form method="post" action="/posts/{{$post->id}}">
        <input type="hidden" name="_method" value="DELETE">
        @csrf
        <button type="submit" name="submit">delete</button>
    </form> --}}
@endsection