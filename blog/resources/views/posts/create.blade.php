@extends('layouts.app')
@section('content')

{{-- //count($errors) --}}
    @if ($errors->any())
    <div class="mt-3 alert alert-danger">
       @foreach ($errors->all() as $error)
        <strong>{{$error}}</strong><br>
        @endforeach 
    </div>
    @endif 
    {!! Form::open(['method'=>'POST','action'=>'PostsController@store','files'=>true]) !!}
            <div class="form-group">
                {!! Form::label('title','Title:') !!}
                {!! Form::text('title',null,['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('descriptions','Descriptions:') !!}
                {!! Form::textarea('descriptions',null,['class'=>'form-control']) !!}
            </div>       
            <div class="form-group">
                {!! Form::label('file','File:') !!}
                {!! Form::file('file',null,['class'=>'form-control']) !!}
            </div>        
            <div class="form-group">
                {!! Form::submit('Create',['class'=>'btn btn-primary']) !!}
            </div>
    {!! Form::close() !!}

    {{-- <form method="post" action="/posts">
        @csrf
        <input type="text" name="title" placeholder="title of  ..">
        <input type="text" name="descriptions" placeholder="content of  ..">
        <button type="submit" name="submit">save</button>
    </form> --}}

@endsection