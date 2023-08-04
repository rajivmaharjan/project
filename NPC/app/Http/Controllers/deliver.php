<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\distribution;
use App\Models\validation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Unique;
use Session;
class deliver extends Controller
{
        public function deliver_data(Request $request){

        $dis = new distribution();
        $dis->province = $request->province;
        $dis->district = $request->district;
        $dis->petrolpumpname = $request->petrolpump;
        $dis->distributedamount = $request->amount;

        $val = new validation();
        $val->province = $request->province;
        $val->district = $request->district;
        $val->PetrolPumpName = $request->petrolpump;
        $val->DistributedAmount = $request->amount;
        
        $res = $dis->save();
        $res2 = $val->save();
        if($res && $res2){
            return back()->with('Success','Amount Distributed');
        }
        else
        {
            return back()->with('Failed','Amount Not Distributed');
        }
        
    }
}