@extends('layouts.app')

@section('content')
<div class="container-fluid" id="banner">
    <div class="container-fluid text-center" id="fade">
                    @if(!($transacts->isEmpty()))
                    <div class="table-responsive container">
                            <table class="table table-striped table-dark">
                                <thead>
                                    <tr class="">
                                    <th scope="col">#</th>
                                    <th scope="col">amount from</th>
                                    <th scope="col">amount to</th>
                                    <th scope="col">Rate of</th>
                                    <th scope="col">contact</th>
                                    <th scope="col">Resident state</th>
                                    <th scope="col">date/time</th>
                                    </tr>
                                </thead>
                                <tbody>
                    <?php $index=1; ?>
                        @foreach($transacts as $transact)
                                    <tr class="">
                                        <td> {{$index++}}</td>
                                        @if(($transact->currencyfrom) == 1)
                                            <td> £ {{$transact->amount_from}}</td>
                                        @elseif(($transact->currencyfrom) == 2)
                                            <td>₦ {{$transact->amount_from}}</td>
                                        @elseif(($transact->currencyfrom) == 3)
                                            <td>GH₵ {{$transact->amount_from}}</td>
                                        @elseif(($transact->currencyfrom) == 4)
                                            <td>$ {{$transact->amount_from}}</td>
                                        @endif

                                        @if(($transact->currencyto) == 1)
                                            <td>£ {{$transact->amount_to}}</td>
                                        @elseif(($transact->currencyto) == 2)
                                            <td>₦ {{$transact->amount_to}}</td>
                                        @elseif(($transact->currencyto) == 3)
                                            <td>GH₵ {{$transact->amount_to}}</td>
                                        @elseif(($transact->currencyto) == 4)
                                            <td>$ {{$transact->amount_to}}</td>
                                        @endif
                            
                                        <td>{{$transact->rate}}</td>
                                        <td> {{$transact->contact_no}}</td>
                                        <td> {{$transact->resident_state}}</td>
                                        <td> {{date($transact->created_at)}}</td>
                                    </tr>
                        @endforeach
                        </tbody>
                            </table> 
                        </div>
                    @else
                    <center>
                    <div class="card text-white bg-dark mb-3 w-50" style="padding:5%;">
                        
                         <div class="card-body">
                         <span style='font-size:100px;'>&#128530;</span><br>
                            <h5 class="card-title">No transactions yet!!!</h5>
                        </div>
                    </div>
                    </center>
                    @endif
                       
    </div>
</div>
@endsection