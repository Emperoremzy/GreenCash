@extends('layouts.app')

@section('content')
<br>
<div class="container">
<h4 class="m-2">{{ __('Admin|Rates')}} <h4>
    @if(isset($success))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{$success}}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
    @endif
    <div class="row">
    <?php $m = 1;?>
        @foreach($Rates as $rate)
        @include('Layouts.editModal')
        <div class="col-sm-12 col-md-5 col-lg-3">
             <div class="card m-2" style="">
                <div class="card-body" id="rate">
                    <h6 class="card-subtitle mb-2 text-muted text-center">Current Rate</h6>
                        <p class="card-text text-center display-5">
                            @if(($rate->sendto) == 1)
                                £ {{$rate->c_rate}}
                            @elseif(($rate->sendto) == 2)
                                ₦ {{$rate->c_rate}}
                            @elseif(($rate->sendto) == 3)
                                GH₵ {{$rate->c_rate}}
                            @elseif(($rate->sendto) == 4)
                                $ {{$rate->c_rate}}
                            @endif
                        </p>
                        <h5 class="card-title text-center" >
                            @if(($rate->sendfrom) == 1)
                                from  £ 
                            @elseif(($rate->sendfrom) == 2)
                                From: ₦ 
                            @elseif(($rate->sendfrom) == 3)
                                From: GH₵ 
                            @elseif(($rate->sendfrom) == 4)
                                From: $ 
                            @endif
                                -
                            @if(($rate->sendto) == 1)
                                        £ 
                                    @elseif(($rate->sendto) == 2)
                                        ₦ 
                                    @elseif(($rate->sendto) == 3)
                                        GH₵
                                    @elseif(($rate->sendto) == 4)
                                        $ 
                                    @endif
                        </h5>
                        <a href="#" id ="home-form-button" data-toggle="modal" data-target="#exampleModalCenter{{$m++}}" class="btn btn-block">Edit</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
