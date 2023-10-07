<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hour; 
use App\Models\Month; 
use App\Models\Year; 
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\HourRequest;

class HourController extends Controller
{
    public function index(Hour $hour, Year $year)
    {
        return view('hours.index')->with(['hours' => $hour->order()])->with(['years' => Auth::user()->years()->get()]);
    }
    
    public function create(Hour $hour, Year $year, Month $month)
    {
        return view('hours.create')->with(['hour' => $hour])->with(['years' => $year->get()])->with(['months' => $month->get()]);
    }
    
    public function store(Request $request, Hour $hour)
    {
        $input = $request['hour'];
        $input += ['user_id' => $request->user()->id];  
        $input += ['total_cost' => $input["rent"] + $input["water_cost"] + $input["utilitiy_cost"] + $input["food_cost"] + $input["phone_cost"] + $input["other_cost"]]; 
        $input += ['amount' => ($input["income"] - $input["total_cost"]) / $input["hourly_wage"]];  
        $hour->fill($input)->save();
        return redirect('/');
    }
    
    public function show(Hour $hour, Year $year, Month $month)
    {
        return view('hours.show')->with(['hour' => $hour])->with(['years' => $year->get()])->with(['months' => $month->get()]);
    }
    
    
    public function total_cost(Cost $cost)
    {
        $rent = DB::table('hours')->where('user_id', Auth::user()->id)->value('rent');
        $water_cost = DB::table('hours')->where('user_id', Auth::user()->id)->value('water_cost');
        $utilitiy_cost = DB::table('hours')->where('user_id', Auth::user()->id)->value('utilitiy_cost');
        $food_cost = DB::table('hours')->where('user_id', Auth::user()->id)->value('food_cost');
        $phone_cost = DB::table('hours')->where('user_id', Auth::user()->id)->value('phone_cost');
        $other_cost = DB::table('hours')->where('user_id', Auth::user()->id)->value('other_cost');
        $total = 0;
        $total += $rent;
        $total += $water_cost;
        $total += $utilitiy_cost;
        $total += $food_cost;
        $total += $phone_cost;
        $total += $other_cost;
        
        return view('hours.total_cost')->with(['total' => $total]);
    }
    
    
    
    public function edit(Hour $hour, Year $year, Month $month)
    {
        return view('hours.edit')->with(['hour' => $hour])->with(['years' => $year->get()])->with(['months' => $month->get()]);
    }
    
    public function update(Hour $hour, Request $request)
    {
        $input = $request['hour'];
        $input += ['user_id' => $request->user()->id];  
        $input += ['total_cost' => $input["rent"] + $input["water_cost"] + $input["utilitiy_cost"] + $input["food_cost"] + $input["phone_cost"] + $input["other_cost"]];  
        $input += ['amount' => ($input["income"] - $input["total_cost"]) / $input["hourly_wage"]];  
        $hour->fill($input)->save();
        
        return redirect('/hours/' . $hour->id);
    }
    
    public function delete(Hour $hour)
    {
        $hour->delete();
        return redirect('/');
    }
}
