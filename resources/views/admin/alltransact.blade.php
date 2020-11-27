@extends('layouts.app')

@section('content')

    <div class="container-fluid text-center" id="fade">
        
    <div class="container">
        <form class="form-inline" action="/admin/search" method="POST">
            @csrf
            <div class="input-group input-group-lg mx-sm-3 mb-2">
                <input type="number" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" name="search"  placeholder="Search">
            </div>
            <button type="submit" class="btn mb-2" id="home-form-button">Submit</button>
        </form>
    </div>
                    @if(!(empty($searchdetail)))
                        <div class="table-responsive container">
                                <table class="table table-striped table-dark">
                                    <thead>
                                        <tr class="">
                                        <th scope="col">#</th>
                                        <th scope="col">User Email</th>
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
                           
                                        <tr class="">
                                            <td> {{$index++}}</td>
                                            <td> {{$searchdetail->user_email}}</td>
                                            @if(($searchdetail->currencyfrom) == 1)
                                                <td> £ {{$searchdetail->amount_from}}</td>
                                            @elseif(($searchdetail->currencyfrom) == 2)
                                                <td>₦ {{$searchdetail->amount_from}}</td>
                                            @elseif(($searchdetail->currencyfrom) == 3)
                                                <td>GH₵ {{$searchdetail->amount_from}}</td>
                                            @elseif(($searchdetail->currencyfrom) == 4)
                                                <td>$ {{$searchdetail->amount_from}}</td>
                                            @endif
                                                

                                            @if(($searchdetail->currencyto) == 1)
                                                <td>£ {{$searchdetail->amount_to}}</td>
                                            @elseif(($searchdetail->currencyto) == 2)
                                                <td>₦ {{$searchdetail->amount_to}}</td>
                                            @elseif(($searchdetail->currencyto) == 3)
                                                <td>GH₵ {{$searchdetail->amount_to}}</td>
                                            @elseif(($searchdetail->currencyto) == 4)
                                                <td>$ {{$searchdetail->amount_to}}</td>
                                            @endif
                                
                                            <td>{{$searchdetail->rate}}</td>
                                            <td> {{$searchdetail->contact_no}}</td>
                                            <td> {{$searchdetail->resident_state}}</td>
                                            <td> {{date($searchdetail->created_at)}}</td>
                                        </tr>
                                    </tbody>
                                </table> 
                            </div>

                    @elseif(!($transacts->isEmpty()))
                        <div class="table-responsive container">
                                <table class="table table-striped table-dark">
                                    <thead>
                                        <tr class="">
                                        <th scope="col">#</th>
                                        <th scope="col">User Email</th>
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
                                            <td>{{$transact->user_email}}</td>
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