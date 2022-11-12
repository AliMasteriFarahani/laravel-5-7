@extends('layouts.app')
@section('content')
    <ul>
        @foreach ($posts as $post)
            <div class="col-md-2">
                {{-- without accessor --}}
                {{-- <img height="70" src="/images/{{$post->path}}" alt=""> --}}
                {{-- with accessor --}}
                <img height="70" src="{{$post->path}}" alt="">
            </div>
            <li class="col-md-5"><a href="{{route('posts.show',$post->id)}}">{{$post->title}}</a></li>
            <strong>{{$post->user->name}}</strong>
        @endforeach
    </ul>
@endsection