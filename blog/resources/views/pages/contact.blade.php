@extends('layouts.app')
@section('content')
    <ul>
        @if (count($peaple))
            @foreach ($peaple as $person)
                <li>{{$person}}</li>
            @endforeach
        @endif
    </ul>
@endsection