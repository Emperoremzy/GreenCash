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
        
        <link href="http://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
        <!--custom css-->
        <link href="css/custom-style.css" rel="stylesheet">
            <style>
                    .navbar{
    background-color: rgba(52, 58, 64, 1);
    font-weight:bold;
   
    
}
.navbar a{
    color:#FFA500 !important;
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
   color:#FFA500;
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
    color:#FFA500;
    font-weight:bold;
    background-color:transparent;
    border: 1px solid #FFA500;
    padding: 10px;
    text-transform: uppercase; 
}

#home-form-button:hover{
    color:white !important;
    background-color: #FFA500;
}

/* magic button starts here */
#banner-button{
    width: 150px !important;
   font-weight: bold;
   color: #FFA500;
   text-transform: uppercase;
   letter-spacing: 4px;
   transition: 0.2s;
   position: relative ;
    display:inline-block;
    overflow: hidden;
}

#banner-button:hover{
   color:white;
   background: #FFA500;
   box-shadow: 0 0 10px #FFA500, 0 0 40px #FFA500, 0 0 80px #FFA500;
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
    background: linear-gradient(90deg,transparent,#FFA500);

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
    background: linear-gradient(270deg,transparent,#FFA500);

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
    background: linear-gradient(180deg,transparent,#FFA500);

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
    background: linear-gradient(360deg,transparent,#FFA500);

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
    color: #FFA500;
    font-weight: 600;
    border-width:1px;
    border-bottom: solid;
     border-color:#FFA500;
     width: 30%;
     
     
}
#Works{
   font-weight: 500;
}
#Works h3{
    color: #FFA500 !important;
    font-weight: 600;
    border-width:1px;
    border-bottom: solid;
    border-color:#FFA500;
    width: 200px;
}
hr{
    border: 0;
    height: 1px;
    background-image: linear-gradient(to right, rgba(218, 216, 216, 0), #FFA500, rgba(250, 248, 248, 0));
}

#footer{
    margin-top:-1.2% !important;
    background-color: rgba(52, 58, 64, 1);
    color:white;
}

p span{
    color: #FFA500;
}

#authcards{
    color:white;
    background-color:transparent;
    box-shadow: 0 0 10px #FFA500, 0 0 40px #FFA500, 0 0 80px #FFA500;
}

#authcards input{
    background:transparent;
    border-top:0;
    border-left:0;
    border-right:0;
    border-bottom:1px solid #FFA500;
    outline:none;
}
#authcards input:focus{
    height: 50px;
    color:white;
    border-bottom:1px solid #FFA500;
    box-shadow: none;
}

            </style>
    </head>
    <body class="">
      
            @include('layouts.navbar')
            @yield('content')
            @include('layouts.footer')

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" ></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
      </div>
    </body>
</html>
