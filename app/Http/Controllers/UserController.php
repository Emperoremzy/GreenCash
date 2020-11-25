<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Currency;
use App\Models\Rate;
use App\Mail\AdminNotify;
use App\Models\Request as RequestModel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class UserController extends Controller
{
    //
    public function index()
    {
        return view('user.dashboard');
    }

    public function request(Request $request)
    {
        $this->validate($request,[
            'currencyfrom' => "required",
            'currencyto' => "required",
            'amount' => "required",
            'countryreside' => "required",
            'phone_no' => "required"
              ]);

                $prev_amount = $request->amount;

                $currencyfrom = $request->currencyfrom;

                $currencyto = $request->currencyto;

                $reside =$request->countryreside;

                $phone = $request->phone_no;

                $checkfrom = Currency::where('currencyid', $request->currencyfrom)->get();

                $checkto = Currency::where('currencyid', $request->currencyto)->get();

      
      
                if(count($checkfrom) == 1 || count($checkto) == 1){
                     
                      $checkrates = Rate::where('sendfrom', $request->currencyfrom)->where('sendto', $request->currencyto)->get();

                      if(count($checkrates) > 0){

                          foreach($checkrates as $checkrate){
      
                              if($request->currencyto == 2){

                                  $new_amount = ($checkrate->c_rate) * ($request->amount);

                                    $show_amount_to = "₦". ($new_amount);
                                    $checkrates = "₦". ($checkrate->c_rate);
                                    $hiddenrate = $checkrate->c_rate;

                              }elseif($request->currencyto == 3){

                                    $new_amount = ($checkrate->c_rate) * ($request->amount);
                                    $show_amount_to = "GH₵". ($new_amount);
                                    $checkrates = "GH₵". ($checkrate->c_rate);
                                    $hiddenrate = $checkrate->c_rate;

                              }elseif($request->currencyto == 4){

                                    $new_amount = ($checkrate->c_rate) * ($request->amount);
                                    $show_amount_to =  "$" . ($new_amount);
                                    $checkrates = "$". ($checkrate->c_rate);
                                    $hiddenrate = $checkrate->c_rate;

                              }else{

                                $new_amount = ($checkrate->c_rate) * ($request->amount);
                                $show_amount_to = "£". ($new_amount);
                                $checkrates = "£". ($checkrate->c_rate);
                                $hiddenrate = $checkrate->c_rate;

                              }
                         
                          }
                      }
                      
                      if($currencyfrom == 1){

                            $show_amount_from = "£". ($prev_amount);

                        }else if($currencyfrom == 2){

                            $show_amount_from = "₦". ($prev_amount);

                        }else if($currencyfrom == 3){

                            $show_amount_from = "GH₵". ($prev_amount);

                        }else if($currencyfrom == 4){

                            $show_amount_from = "$". ($prev_amount);

                        }
                }

                    $name = auth::user()->name;
                    // dd($prev_amount, $reside, $phone, $show_amount_from, $show_amount_to,$checkrates, Auth::user()->name, Auth::user()->id);
                      return view('user.confirmRequest')->with(compact('prev_amount', 'reside', 'phone', 'show_amount_from', 'show_amount_to', 'checkrates', 'name','new_amount','prev_amount','currencyfrom', 'currencyto', 'hiddenrate'));
    }

    public function confirm_request(Request $request)
    {
        
        $process_request = new RequestModel();

        $process_request->user_id = auth::user()->id;

        $process_request->contact_no = $request->phone;

        $process_request->resident_state = $request->reside;

        $process_request->amount_from = $request->user_amount;

        $process_request->amount_to = $request->convert_amount;

        $process_request->currencyfrom = $request->currencyfrom;

        $process_request->currencyto = $request->currencyto;

        $process_request->rate = $request->rate;

        $process_request->save();

        try {

            $order = $process_request;
             Mail::to('edimabassey2@gmail.com')->send(new AdminNotify($order));

        } catch (Exception $e){
            //return 123;
        }

        return view('user.success')->with('mssg','Thank you for your order A team member will contact you shortly');
    }

    
    public function transactions(){

        $view_transact = RequestModel::where('user_id', auth::user()->id)->get();
        
        return view('user.transactions')->with('transacts', $view_transact);
    }
   
}
