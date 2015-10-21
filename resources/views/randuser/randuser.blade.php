@extends('layouts.master')

@section('content')

    <form method="post">
        <input type='hidden' name='_token' value='{{ csrf_token() }}'>
        <input type='number' name='fakes' value='{{ old('fakes') }}' min="1" max="25" required><br>
        <div class="checkbox">
        <label><input type='checkbox' name='address'>Include an address?</label><br>
        </div>
        <div class="checkbox">
        <label><input type='checkbox' name='number'>Include a phone number?</label><br>
        </div>
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