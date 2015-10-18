@extends('layouts.master')

@section('content')

    
    @foreach ($faker as $faker)   
        {!! $faker !!}
        {!! '<br>' !!}
    @endforeach
    
@stop