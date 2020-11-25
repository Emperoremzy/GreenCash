@extends('layouts.app')

@section('content')

<div class="container-fluid p-5"  style="background-color:#343a40">


    <div class="row">
        <div class="col-sm-12 col-md-6 col-lg-6 text-white p-5" >
            <h1 class="display-1"> Fast <em style="color:#86C232;">cash</em> at incredible rates</h1>
            <p>
                    GreenCash is your trusted source for affordable foreign currencies when you need it.
                    <br>
                    <ol> 
                    How it works
                    <li>Enter how much you want using the exhcnage calculator</li>
                    <li>Input your contact details and confirm your order</li>
                    <li> A member of our team will contact you within 3 working hours to process the payment</li>
                    </ol>
             </p>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-6">
                <div class="row justify-content-center">
                    <div class="col-md-12 col-sm-12 col-lg-12">
                    
                        <div class="card text-white bg-dark p-5">
                          
                                
                            <div class="card-body">
                                <form action="/user/request" method="POST" >
                                @csrf
                                    <div class="form-row">
                                    <div class="form-group col-md-6">
                                            <label for="inputState">Send from</label>
                                            <select id="inputState" name="currencyfrom" class="form-control">
                                                <option>......</option>
                                                <option value="2">Nigeria</option>
                                                <option value="1">United Kingdom</option>
                                                <option value="4">USA</option>
                                                <option value="3">Ghana</option>
                                            </select>
                                        </div>
                                        
                                        <div class="form-group col-md-6">
                                            <label for="inputState" class="">Recieve from</label>
                                            <select id="inputState" name="currencyto"  class="form-control">
                                            <option>......</option>
                                                <option value="4">USA</option>
                                                <option value="1">United Kingdom</option>
                                                <option value="2">Nigeria</option>
                                                <option value ="3">Ghana</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Amount</label>
                                        <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"name="amount" placeholder="Enter required amount">
                                        <small id="emailHelp" class="form-text text-muted">Please enter a reasonable amount.</small>
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Phone Number</label>
                                        <input type="tel" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="phone_no" placeholder="Enter Phone number">
                                        <small id="emailHelp" class="form-text text-muted">Please enter a number we can contact u with.</small>
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Country of residence</label>
                                        <select id="inputState" name="countryreside" class="form-control">
                                            <option>......</option>
                                               @include('layouts.allcountries')
                                            </select>
                                        <small id="emailHelp" class="form-text text-muted">please input your country you currently reside.</small>
                                    </div>

                                    <button type="submit" class="btn btn-block" id="home-form-button">Get your Cash</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>

    
</div>
@endsection
