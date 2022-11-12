@extends('layouts.app')

@section('content')
   {{-- <h3> {{__('message.welcome',['name'=>'Ali'])}}</h3> --}}
   {{-- <h3> @lang('message.welcome',['name'=>'Ali'])</h3> --}}
   <h3> {{ trans('message.welcome',['name'=>'Ali']) }}</h3>
   <h3> {{ trans_choice('message.nocar',0,['value'=>0]) }}</h3>
@endsection