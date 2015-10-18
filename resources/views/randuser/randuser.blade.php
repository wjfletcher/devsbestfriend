@extends('layouts.master')

@section('content')

    <form method="post">
        <input type='hidden' name='_token' value='{{ csrf_token() }}'>
        <input type='text' name='fakes' value='{{ old('fakes') }}'><br>
        <input type='checkbox' name='address'><br>
        <input type='checkbox' name='number'><br>
        @if(count($errors) > 0)
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
        <input type='submit'>

    </form>
@stop