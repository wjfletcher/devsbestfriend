@extends('layouts.master')

@section('content')

    <form method="post">
        <input type='hidden' class='form-control' name='_token' value='{{ csrf_token() }}'>
        <input type='number' name='paragraphs' value='{{ old('paragraphs') }}' min='1' max='25' required><br>
        @if(count($errors) > 0)
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
        <button type="submit" class="btn btn-success">
        Generate
        </button>

    </form>
@stop