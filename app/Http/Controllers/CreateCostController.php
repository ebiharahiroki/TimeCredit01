<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cost;
use App\Models\Hour; 
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\CostRequest;

class CreateCostController extends Controller
{
   public function create_january_cost(Cost $cost)
    {
        return view('costs.registrations.create_january_cost')->with(['cost' => $cost]);
    }
    
    public function create_february_cost(Cost $cost)
    {
        return view('costs.registrations.create_february_cost')->with(['cost' => $cost]);
    }
    
    public function create_march_cost(Cost $cost)
    {
        return view('costs.registrations.create_march_cost')->with(['cost' => $cost]);
    }
    
    public function create_april_cost(Cost $cost)
    {
        return view('costs.registrations.create_april_cost')->with(['cost' => $cost]);
    }
    
    public function create_may_cost(Cost $cost)
    {
        return view('costs.registrations.create_may_cost')->with(['cost' => $cost]);
    }
    
    public function create_june_cost(Cost $cost)
    {
        return view('costs.registrations.create_june_cost')->with(['cost' => $cost]);
    }
    
    public function create_july_cost(Cost $cost)
    {
        return view('costs.registrations.create_july_cost')->with(['cost' => $cost]);
    }
    
    public function create_august_cost(Cost $cost)
    {
        return view('costs.registrations.create_august_cost')->with(['cost' => $cost]);
    }
    
    public function create_september_cost(Cost $cost)
    {
        return view('costs.registrations.create_september_cost')->with(['cost' => $cost]);
    }
    
    public function create_october_cost(Cost $cost)
    {
        return view('costs.registrations.create_october_cost')->with(['cost' => $cost]);
    }
    
    public function create_november_cost(Cost $cost)
    {
        return view('costs.registrations.create_november_cost')->with(['cost' => $cost]);
    }
    
    public function create_december_cost(Cost $cost)
    {
        return view('costs.registrations.create_december_cost')->with(['cost' => $cost]);
    }
    
    public function store_january_cost(Request $request, Cost $cost)
    {
        $input = $request['cost'];
        $input += ['user_id' => $request->user()->id];  
        $input += ['january_total_cost' => $input["january_rent"] + $input["january_water_cost"] + $input["january_utilitiy_cost"] + $input["january_food_cost"] + $input["january_phone_cost"] + $input["january_other_cost"]];  
        $cost->fill($input)->save();
        return redirect('/hours/culculateHour');
    }
    
    public function store_february_cost(Request $request, Cost $cost)
    {
        $input = $request['cost'];
        $input += ['user_id' => $request->user()->id];  
        $input += ['february_total_cost' => $input["february_rent"] + $input["february_water_cost"] + $input["february_utilitiy_cost"] + $input["february_food_cost"] + $input["february_phone_cost"] + $input["february_other_cost"]];  
        $cost->fill($input)->save();
        return redirect('/hours/culculateHour');
    }
    
    public function store_march_cost(Request $request, Cost $cost)
    {
        $input = $request['cost'];
        $input += ['user_id' => $request->user()->id];  
        $input += ['march_total_cost' => $input["march_rent"] + $input["march_water_cost"] + $input["march_utilitiy_cost"] + $input["march_food_cost"] + $input["march_phone_cost"] + $input["march_other_cost"]];  
        $cost->fill($input)->save();
        return redirect('/hours/culculateHour');
    }
    
    public function store_april_cost(Request $request, Cost $cost)
    {
        $input = $request['cost'];
        $input += ['user_id' => $request->user()->id];  
        $input += ['april_total_cost' => $input["april_rent"] + $input["april_water_cost"] + $input["april_utilitiy_cost"] + $input["april_food_cost"] + $input["april_phone_cost"] + $input["april_other_cost"]];  
        $cost->fill($input)->save();
        return redirect('/hours/culculateHour');
    }
    
    public function store_may_cost(Request $request, Cost $cost)
    {
        $input = $request['cost'];
        $input += ['user_id' => $request->user()->id];  
        $input += ['may_total_cost' => $input["may_rent"] + $input["may_water_cost"] + $input["may_utilitiy_cost"] + $input["may_food_cost"] + $input["may_phone_cost"] + $input["may_other_cost"]];  
        $cost->fill($input)->save();
        return redirect('/hours/culculateHour');
    }
    
    public function store_june_cost(Request $request, Cost $cost)
    {
        $input = $request['cost'];
        $input += ['user_id' => $request->user()->id];  
        $input += ['june_total_cost' => $input["june_rent"] + $input["june_water_cost"] + $input["june_utilitiy_cost"] + $input["june_food_cost"] + $input["june_phone_cost"] + $input["june_other_cost"]];  
        $cost->fill($input)->save();
        return redirect('/hours/culculateHour');
    }
    
    public function store_july_cost(Request $request, Cost $cost)
    {
        $input = $request['cost'];
        $input += ['user_id' => $request->user()->id];  
        $input += ['july_total_cost' => $input["july_rent"] + $input["july_water_cost"] + $input["july_utilitiy_cost"] + $input["july_food_cost"] + $input["july_phone_cost"] + $input["july_other_cost"]];  
        $cost->fill($input)->save();
        return redirect('/hours/culculateHour');
    }
    
    public function store_august_cost(Request $request, Cost $cost)
    {
        $input = $request['cost'];
        $input += ['user_id' => $request->user()->id];  
        $input += ['august_total_cost' => $input["august_rent"] + $input["august_water_cost"] + $input["august_utilitiy_cost"] + $input["august_food_cost"] + $input["august_phone_cost"] + $input["august_other_cost"]];  
        $cost->fill($input)->save();
        return redirect('/hours/culculateHour');
    }
    
    public function store_september_cost(Request $request, Cost $cost)
    {
        $input = $request['cost'];
        $input += ['user_id' => $request->user()->id];  
        $input += ['september_total_cost' => $input["september_rent"] + $input["september_water_cost"] + $input["september_utilitiy_cost"] + $input["september_food_cost"] + $input["september_phone_cost"] + $input["september_other_cost"]];  
        $cost->fill($input)->save();
        return redirect('/hours/culculateHour');
    }
    
    public function store_october_cost(Request $request, Cost $cost)
    {
        $input = $request['cost'];
        $input += ['user_id' => $request->user()->id];  
        $input += ['october_total_cost' => $input["october_rent"] + $input["october_water_cost"] + $input["october_utilitiy_cost"] + $input["october_food_cost"] + $input["october_phone_cost"] + $input["october_other_cost"]];  
        $cost->fill($input)->save();
        return redirect('/hours/culculateHour');
    }
    
    public function store_november_cost(Request $request, Cost $cost)
    {
        $input = $request['cost'];
        $input += ['user_id' => $request->user()->id];  
        $input += ['november_total_cost' => $input["november_rent"] + $input["november_water_cost"] + $input["november_utilitiy_cost"] + $input["november_food_cost"] + $input["november_phone_cost"] + $input["november_other_cost"]];  
        $cost->fill($input)->save();
        return redirect('/hours/culculateHour');
    }
    
    public function store_december_cost(Request $request, Cost $cost)
    {
        $input = $request['cost'];
        $input += ['user_id' => $request->user()->id];  
        $input += ['december_total_cost' => $input["december_rent"] + $input["december_water_cost"] + $input["december_utilitiy_cost"] + $input["december_food_cost"] + $input["december_phone_cost"] + $input["december_other_cost"]];  
        $cost->fill($input)->save();
        return redirect('/hours/culculateHour');
    }
}
