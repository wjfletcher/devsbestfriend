@extends('layouts.master')

@section('content')
    <div class="section">
    <h2>Click above to generate new random users or lorem ipsum text!</h2><br>
</div>
    @foreach ($paragraphs as $paragraphs)
        {!! '<p>' !!}
        {{ $paragraphs }}
    @endforeach
@stop