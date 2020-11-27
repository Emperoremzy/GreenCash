<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Currency;
use App\Models\Rate;
use App\Models\User;
use App\Mail\AdminNotify;
use App\Models\Request as RequestModel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class AdminController extends Controller
{
    //
    public function index()
    {
        $showRates = Rate::all();
      
        return view('admin.dashboard')->with('Rates', $showRates);
    }


    public function  all_transacts()
    {
        $Requests = RequestModel::all()->sortByDesc("updated_at");
       
        return view('admin.alltransact')->with('transacts', $Requests);
    }


    public function  all_clients()
    {
        $users = User::where('users', 0)->get();
    
        return view('admin.clients')->with('users', $users);
    }


    public function edit_Rate(Request $request)
    {
        $id= $request->id;

        $editRates = Rate::findorfail($id);

        $editRates->c_rate = $request->new_rate;
        
        $editRates->save();

        $success="successfully updated";

        return redirect()->back()->with('success', $success);
    }

    public function search(Request $request)
    {
        $this->validate($request,[

            'search' => "required"

              ]);



        $showSearch = RequestModel::findorfail($request->search);
   
        return view('admin.alltransact')->with('searchdetail', $showSearch);
    }

}
