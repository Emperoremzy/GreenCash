<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Currency;
use App\Models\Rate;

class PagesController extends Controller
{
    //
    public function index(){

            return view('welcome');

    }


    public function userIndex()
    {
        return view('home');
    }


    public function CurrencyRate(Request $request){

            $this->validate($request,[
            'currencyfrom' => "required",
            'currencyto' => "required",
              ]);


            $checkfrom = Currency::where('currencyid', $request->currencyfrom)->get();

             $checkto = Currency::where('currencyid', $request->currencyto)->get();


            if(count($checkfrom) == 1 || count($checkto) == 1){
               
                $checkrates = Rate::where('sendfrom', $request->currencyfrom)->where('sendto', $request->currencyto)->get();

                if(count($checkrates) > 0){

                    foreach($checkrates as $checkrate){

                        if($request->currencyfrom == 2){

                             $checkrates = "₦". ($checkrate->c_rate);

                        }elseif($request->currencyfrom == 3){

                            $checkrates = "GH₵". ($checkrate->c_rate);

                        }elseif($request->currencyfrom == 4){

                            $checkrates = "$". ($checkrate->c_rate);

                        }else{

                            $checkrates = "£". ($checkrate->c_rate);

                        }
                   
                    }
                }

                return view('welcome')->with('checkrates', $checkrates );

            }
    }

}
