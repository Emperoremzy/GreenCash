@extends('layouts.app')

@section('content')
<div class="container-fluid" id="banner">

    <div class="container-fluid text-center" id="fade">
            @if(isset($mssg))
            <h1 class="display-2 p-2 text-white mt-5">{!!$mssg!!}</h1>
            @endif
            <br><br>
                <a type="button" href="{{ route('transactions') }}" id="home-form-button" class="btn m-3 p-2 mt-5">                                     
                     follow up on a previous order
                </a>
                <br>
                 <a type="button" href="{{ route('home') }}" id="home-form-button" class="btn m-3 p-2 mt5">
                              place another order
                  </a>
                <br>                                  
    </div>
</div>
@endsection