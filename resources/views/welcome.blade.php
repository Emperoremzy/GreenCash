
@extends('layouts.master')
@section('content')

    <div class="" id="banner">
        <div class="container-fluid" id="fade">
            <div class="container">
            <h1 class="display-3" id="banner-text">Send and Recieve any,<br> Currency wherever you are</h1>
                <div class="row text-center">
               

                    <div class="col-sm-12 col-md-5">
                        <div class="container">
                            <br><br>
                            <form action="/currencyrate" method="POST" >
                            @csrf
                                <div class="form-row">
                                <div class="form-group col-md-6">
                                        <label for="inputState"><b class="text-white">Send from</b></label>
                                        <select id="inputState" name="currencyfrom" class="form-control">
                                            <option>......</option>
                                            <option value="2">Nigeria</option>
                                            <option value="1">United Kingdom</option>
                                            <option value="4">USA</option>
                                            <option value="3">Ghana</option>
                                        </select>
                                    </div>
                                    
                                    <div class="form-group col-md-6">
                                        <label for="inputState" class="text-white"><b>Recieve from</b></label>
                                        <select id="inputState" name="currencyto"  class="form-control">
                                        <option>......</option>
                                            <option value="4">USA</option>
                                            <option value="1">United Kingdom</option>
                                            <option value="2">Nigeria</option>
                                            <option value ="3">Ghana</option>
                                        </select>
                                    </div>
                                </div>
                                 <button type="submit" class="btn btn-block" id="home-form-button">view exchange value</button>
                            </form>
                        </div>
                        <div class="container mt-2">
                            <center>
                            @if (Route::has('login'))
                                @auth
                                    @if (auth::user()->users == 1)
                                    <a href="{{ route('admin.dashboard') }}"  class="btn btn-block btn-outline-success ">Dashboard</a>
                                    @else
                                    <a href="{{ url('/dashboard') }}"  class="btn btn-block btn-outline-success ">Dashboard</a>
                                    @endif
                                @else
                                    @if (Route::has('register'))
                                        <a type="button" href="{{ route('register') }}" id="banner-button" class="btn m-3 p-2">
                                            <span></span>   
                                            <span></span>  
                                            <span></span>   
                                            <span></span>  
                                             
                                         Sign Up
                                      </a>
                                    @endif
                                     <a type="button"  href="{{ route('login') }}"  id="banner-button" class="btn p-2">
                                             <span></span>   
                                            <span></span>  
                                            <span></span>  
                                            <span></span>     
                                     Login</a>
                                @endif
                             @endif
                            </center>
                        </div>
                    </div>
            
                    <div class="col-sm-12 col-md-7 text-center">
                            @if(isset($checkrates))
                                 <h1 class=" display-3 mt-5" id="rate"> {{$checkrates}} </h1>
                            @endif
                    </div>
                  
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-5 text-center p-5" id="Works">
        <center>
           <h2 class="m-5">HOW IT WORKS</h2>
                <p class="p-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex, reprehenderit! Facilis quia ad porro enim perspiciatis dolorum corrupti? Quibusdam odit iusto et consequatur ea consequuntur voluptates est dignissimos, id nisi.
                 Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dignissimos corrupti asperiores autem minus dolore magni sequi. Sint adipisci cumque, quis nemo veniam accusantium libero dicta. Distinctio, quibusdam itaque! Ad, itaque?
                </p>
                <div class="row p-5 ">
                    <div class="col-md-6">
                        <h3 class=> About Us </h3>
                        <p class=" mt-5">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dignissimos corrupti asperiores autem minus dolore magni sequi. Sint adipisci cumque, quis nemo veniam accusantium libero dicta. Distinctio, quibusdam itaque! Ad, itaque?</p>
                    </div>
                    <div class="col-md-6">
                        <h3> Contact us</h3>
                        <p class=" mt-5">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dignissimos corrupti asperiores autem minus dolore magni sequi. Sint adipisci cumque, quis nemo veniam accusantium libero dicta. Distinctio, quibusdam itaque! Ad, itaque?</p>
                    </div>
                </div> 
        </center>    
    </div>
 @endsection         
