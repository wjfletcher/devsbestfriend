@extends('layouts.master') 

@section('content')
<div class="section">
    <h2>Random User Generator</h2>
    <p>Simply enter the number of users you want to generate, with a maximum of 25. You can choose to add an address and/or a phone number by checking the boxes. To generate a new set of random users, please click the random user button above again. Have fun!</p>
    <br>
    <div class="form">
        <form method="post">
            <input type='hidden' name='_token' value='{{ csrf_token() }}'>
            <div class="input-group">
                <span class="input-group-addon" id="fakes">How many users?</span>
                <input type='number' name="fakes" class="form-control" value='{{ old(' fakes ') }}' min="1" max="25" required aria-describedby="fakes">
            </div>
            <!--<input type='number' name='fakes' value='{{ old('fakes') }}' min="1" max="25" required><br>-->
            <div class="checkbox">
                <label>
                    <input type='checkbox' name='address'>Include an address?</label>
                <br>
            </div>
            <div class="checkbox">
                <label>
                    <input type='checkbox' name='number'>Include a phone number?</label>
                <br>
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
    </div>
</div>
@stop