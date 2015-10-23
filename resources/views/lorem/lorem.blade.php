@extends('layouts.master') 

@section('content')
<div class="section">
    <h2>Lorem Ipsum Generator</h2>
    <p>Simply enter the number of paragraphs you want to generate, with a maximum of 25. To generate a new set of paragraphs, please click the Lorem Ipsum button above again. Give it a try!</p><br>
    <div class="form">
        <form method="post">
            <input type='hidden' class='form-control' name='_token' value='{{ csrf_token() }}'>
            <div class="input-group">
                <span class="input-group-addon" id="paragraphs">How many paragraphs?</span>
                <input type='number' name='paragraphs' class='form-control' value='{{ old(' paragraphs ') }}' min='1' max='25' required aria-describedby="paragraphs">
                
            </div>

            @if(count($errors) > 0)
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
            @endif
            <input type="submit" class="btn btn-success" value="Generate">

        </form>
    </div>
</div>
@stop