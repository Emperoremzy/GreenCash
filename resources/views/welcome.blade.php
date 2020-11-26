
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

    <div class="container mt-5 text-justify p-5" id="Works">
             <h3 class="mt-5"> ABOUT US </h3>
                        <p class=" mt-5">
                             The founders Queen and Courage both hail from Nigeria. Courage worked in the UK, he got paid in pounds but needed Naira to send to his family and complete his housing project in Nigeria. While Queen was studying in the UK and her education founded by her Nigerian parent who earned in Naira. And she needed Pounds to pay her tuition.

                            Every time they sent money through commercial Banks their time was always wasted and a lot of money lost due to hidden charges and terrible exchange rate. At some point they couldn’t receive money from Nigeria through the banks because of the restrictions on commercial banks by the Central Bank of Nigeria. The CBN created a monthly limitation to how much each commercial bank can give its customer to spend. They also found it difficult sending money to Nigeria as they couldn’t get good rates from the UK banks and most banks in the UK don’t send money to Nigeria. This frustration birthed the invention of “GREENCASH”

                            GREENCASH is an alternative, simple and better way to send and receive money, at the same time enabling customers to have the best rate, cutting down time spent, inefficiency with no hidden charges.
                          </p>
                    
            <h2 class="mt-5">HOW IT WORKS</h2>
                    <p class="mt-5">
                        <ol>
                            <li> Create an account for free on our website</li>

                            <li>Provide your transfer details (Choose to send to one of the 4 countries( Nigeria, United Kingdom, Ghana and USA).</li>

                            <li> Add your transfer method: Bank Transfer and cash pick up (Transfer methods vary by country) .</li>

                            <li> Choose how much you want to transfer (You’ll see our low fee price and exchange rate upfront).</li>

                            <li> Add your recipient’s details (Or choose from a list of people you’ve sent to before.)</li>

                            <li> Pay for your transfer (Pay via: Card (Debit, Credit and Prepaid) | Bank Transfer | Apple PayPayment methods vary by country.</li>
                        </ol>           

                    </p>
                       
                  
                        <h3 class="mt-5"> CONTACT US</h3>
                        <p class=" mt-5">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dignissimos corrupti asperiores autem minus dolore magni sequi. Sint adipisci cumque, quis nemo veniam accusantium libero dicta. Distinctio, quibusdam itaque! Ad, itaque?</p>
                
        </center>    
    </div>
 @endsection         
