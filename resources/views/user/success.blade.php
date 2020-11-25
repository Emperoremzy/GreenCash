@extends('layouts.app')

@section('content')
<div class="container-fluid" id="banner">
    <div class="container-fluid text-center" id="fade">
            @if(isset($mssg))
            <h1 class="display-2 text-white">{{$mssg}}</h1>
            @endif
                <a type="button" href="{{ route('transactions') }}" id="home-form-button" class="btn m-3 p-2">                                     
                     follow up on a previous order
                </a>
                <br>
                 <a type="button" href="{{ route('home') }}" id="home-form-button" class="btn m-3 p-2">
                              place another order
                  </a>
                <br>                                  
    </div>
</div>
@endsection