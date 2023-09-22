<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hour;
use App\Models\Cost;

class HourController extends Controller
{
    public function createHour(Request $request, Cost $cost, Hour $hour)
    {
        return view('hours.createHour')->with(['cost' => $cost])->with(['hour' => $hour]);
    }
    
    public function storeHour(Request $request, Hour $hour)
    {
        $input = $request['hour'];
        $input += ['user_id' => $request->user()->id];  
        $input += ['amount' => $input["income"] - $input["current_cost"] / $input["hourly_wage"]];  
        $hour->fill($input)->save();
        return redirect('/costs/create_cost');
    }
}
