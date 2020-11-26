<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <!--custom css-->
        <link href="css/custom-style.css" rel="stylesheet">
            <style>
                    .navbar{
    background-color: rgba(52, 58, 64, 1);
    font-weight:bold;
   
    
}
.navbar a{
    color:#86C232 !important;
}
.navbar a:hover {
    color:white !important;
    border-bottom: 4px !important;
    border-top:1px;
    border-right:0;
    border-left:0;
    border-style: solid;
    border-color: white !important;
    font-weight: bold;
}
.navbar em{
    color:white;
}
#banner{
    background: url(/images/rupixen1.jpg) no-repeat;
    background-size: cover;
    background-position: center right;
    padding:0;
}

@media screen and (max-width: 770px) and (min-width: 300px){
    #banner{
        
        height:1000px !important;
    }
  }

  

#rate{
   /* position:absolute; */
   color:#86C232;
   position:relative;
   animation: animate 2s;
   animation-fill-mode: backwards;

}
@keyframes animate{
    0%{
        right:-100%;
    }
    100%{
        right: 0;
    }
}

#banner-text{
   font-family: Arial, Helvetica, sans-serif;
   font-weight: lighter;
   color: white;
  
   
}

#home-form-button{
    color:#86C232;
    font-weight:bold;
    background-color:transparent;
    border: 1px solid #86C232;
    padding: 10px;
    text-transform: uppercase; 
}

#home-form-button:hover{
    color:white !important;
    background-color: #86C232;
}

/* magic button starts here */
#banner-button{
    width: 150px !important;
   font-weight: bold;
   color: #86C232;
   text-transform: uppercase;
   letter-spacing: 4px;
   transition: 0.2s;
   position: relative ;
    display:inline-block;
    overflow: hidden;
}

#banner-button:hover{
   color:white;
   background: #86C232;
   box-shadow: 0 0 10px #86C232, 0 0 40px #86C232, 0 0 80px #86C232;
   transition-delay: 1s; 
}

#banner-button span{
   display:block;
   position:absolute;
}
/* top flow */
#banner-button span:nth-child(1){
    top: 0;
    left: -100%;
    width: 100%;
    height:2px ;
    background: linear-gradient(90deg,transparent,#86C232);

}
#banner-button:hover span:nth-child(1){
    left:100%;
    transition: 1s;
}
/* bottom flow */
#banner-button span:nth-child(3){
    bottom: 0;
    right: -100%;
    width: 100%;
    height:2px ;
    background: linear-gradient(270deg,transparent,#86C232);

}
#banner-button:hover span:nth-child(3){
    right:100%;
    transition: 1s;
    transition-delay:0.5s;
}
/* right flow */
#banner-button span:nth-child(2){
    top: -100%;
    right: 0;
    width: 2px;
    height: 100%;
    background: linear-gradient(180deg,transparent,#86C232);

}
/* left flow */
#banner-button:hover span:nth-child(2){
    top: 100%;
    transition:1s;
    transition-delay: 0.25s;
}
#banner-button span:nth-child(4){
    bottom: -100%;
    left: 0;
    width: 2px;
    height: 100%;
    background: linear-gradient(360deg,transparent,#86C232);

}
#banner-button:hover span:nth-child(4){
    bottom: 100%;
    transition:1s;
    transition-delay: 0.75s;
}

/* magic button ends here */

#started{
    /* background-color: #327556;
    color:white; */
    font-weight: bold;
}

#fade{
    width: 100%;
    height: 100%;
    background-color:rgba(50, 54, 72, 0.9);
    padding-bottom:100px;
    padding-top: 100px;
   
}
@media screen and (max-width: 770px) and (min-width: 300px){
    #fade{
        
        height:1000px !important;
    }
  }

#Works h2{
    color: #86C232;
    font-weight: 600;
    border-width:1px;
    border-bottom: solid;
     border-color:#86C232;
     width: 30%;
     
     
}
#Works{
   font-weight: 500;
}
hr{
    border: 0;
    height: 1px;
    background-image: linear-gradient(to right, rgba(218, 216, 216, 0), #86C232, rgba(250, 248, 248, 0));
}

#footer{
    background-color:rgba(6, 10, 7, 0.9);
    color:white;
}
#footer h3{
    color: white;
    font-weight: 600;
    border-width:1px;
    border-bottom: solid;
    border-color:#86C232;
    width: 200px;
}
p span{
    color: #86C232;
}

#authcards{
    color:white;
    background-color:transparent;
    box-shadow: 0 0 10px #86C232, 0 0 40px #86C232, 0 0 80px #86C232;
}

#authcards input{
    background:transparent;
    border-top:0;
    border-left:0;
    border-right:0;
    border-bottom:1px solid #86C232;
    outline:none;
}
#authcards input:focus{
    height: 50px;
    color:white;
    border-bottom:1px solid #86C232;
    box-shadow: none;
}

            </style>
    </head>
    <body class="">
        <div class="container">
        <h1>Hello Courage,</h1>
        
            <div class="card p-5 m2-2">

                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-7">
                                     @if(($order->currencyfrom) == 1)
                                            <h2  class="p-2">From:  £ {{$order->amount_from}}</h2>
                                        @elseif(($order->currencyfrom) == 2)
                                            <h2  class="p-2">From: ₦ {{$order->amount_from}}</h2>
                                        @elseif(($order->currencyfrom) == 3)
                                            <h2  class="p-2">From:GH₵ {{$order->amount_from}}</h2>
                                        @elseif(($order->currencyfrom) == 4)
                                            <h2  class="p-2">From: $ {{$order->amount_from}}</h2>
                                        @endif

                                        @if(($order->currencyto) == 1)
                                            <h2  class="p-2">To: £ {{$order->amount_to}}</h2>
                                        @elseif(($order->currencyto) == 2)
                                            <h2  class="p-2">To: ₦ {{$order->amount_to}}</h2>
                                        @elseif(($order->currencyto) == 3)
                                            <h2  class="p-2"> To: GH₵ {{$order->amount_to}}</h2>
                                        @elseif(($order->currencyto) == 4)
                                            <h2  class="p-2"> To: $ {{$order->amount_to}}</h2>
                                        @endif
                            
                                        <h2  class="p-2"> clients email: {{$order->user_email}}</h2>
                                        <h2  class="p-2"> Contact: {{$order->contact_no}}</h2>
                                        <h2  class="p-2"> Resident: {{$order->resident_state}}</h2>
                                        <h2  class="p-2"> Date: {{date($order->created_at)}}</h2>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-7">
                            <h2 class="text-center display-1">rate: {{$order->rate}} </h2>
                    </div>
                </div>
            </div>
            <p>Please visit <a href="http:://www.greencash.org">www.greencash</a> to treat this order</p>
            <p>Green<em style="color:#86C232;">Cash</em> Team.<p>
        </div>

     
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" ></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
      </div>
    </body>
</html>
