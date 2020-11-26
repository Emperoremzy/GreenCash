@extends('layouts.app')

@section('content')
<br>
<div class="container">
    <div class="card p-5 mt-5">
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6 p-5 text-center">
                <h2 class="p-2">Name : {{$name}} </h2>
                <h2  class="p-2">Contact Number: {{$phone}} </h2>
                <h2  class="p-2">Resident State: {{$reside}}</h2>
                <h2  class="p-2">From: {{$show_amount_from}}</h2>
                <h2  class="p-2">To: {{$show_amount_to}} <h2>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6 text-center p-5">
                <label for="">change rate</label>
                    <h1 class="display-1 mt-5"> {{$checkrates}} </h1>
                </div>
        </div>
     </div>
</div>

    <div class="container">
        <center>
        <br>
            <form action="/user/confirm/request" method="post">
            @csrf
            <input type="hidden" name="phone" value = "{{$phone}}">
            <input type="hidden" name="reside" value = "{{$reside}}">
            <input type="hidden" name="user_amount" value = "{{$prev_amount}}">
            <input type="hidden" name="convert_amount" value = "{{$new_amount}}">
            <input type="hidden" name="currencyto" value = "{{$currencyto}}">
            <input type="hidden" name="currencyfrom" value = "{{$currencyfrom}}">
            <input type="hidden" name="rate" value = "{{$hiddenrate}}">
            <button type="submit" class="btn" id="home-form-button">confirm request</button>
            </form>
        </center>

    </div>
@endsection