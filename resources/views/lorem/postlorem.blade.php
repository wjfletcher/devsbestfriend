@extends('layouts.master')

@section('content')

    @foreach ($paragraphs as $paragraphs)
        {!! '<p>' !!}
        {{ $paragraphs }}
    @endforeach
@stop