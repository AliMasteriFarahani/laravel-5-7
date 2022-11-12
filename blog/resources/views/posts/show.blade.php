@extends('layouts.app')
@section('content')
<a href="{{route('posts.edit',$post->id)}}">edit</a>
  <h3>title : {{$post->title}}</h3>
  <h3>content : {{$post->content}}</h3>
@endsection