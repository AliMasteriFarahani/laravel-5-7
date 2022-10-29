@extends('layouts.app')
@section('content')
<h4>welcome to view page</h4>
<h3>id :{{$id}}</h3>
    <h3>name :{{$name}}</h3>
<h3>password :{{$password}}</h3>
@endsection

@section('footer')
    <h3>footer !!!</h3>
@endsection





{{-- <!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <!-- Styles -->
    </head>
    <body>
        <h4>welcome to view page</h4>
        <h3>id :{{$id}}</h3>
        <h3>name :{{$name}}</h3>
        <h3>password :{{$password}}</h3>
    </body>
</html> --}}
