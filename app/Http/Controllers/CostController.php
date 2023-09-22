<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cost;
use App\Models\Hour; 
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\CostRequest;

class CostController extends Controller
{
    public function index(Cost $cost, Hour $hour)
    {
        return view('costs.index')->with(['costs' => Auth::user()->costs()->get()])->with(['hours' => Auth::user()->hours()->get()]);
    }
    
    public function january(Cost $cost)
    {
        return view('costs.indexJanuary')->with(['costs' => Auth::user()->costs()->get()]);
    }
    
    public function february(Cost $cost)
    {
        return view('costs.indexFebruary')->with(['costs' => Auth::user()->costs()->get()]);
    }
    
    public function march(Cost $cost)
    {
        return view('costs.indexMarch')->with(['costs' => Auth::user()->costs()->get()]);
    }
    
    public function april(Cost $cost)
    {
        return view('costs.indexApril')->with(['costs' => Auth::user()->costs()->get()]);
    }
    
    public function may(Cost $cost)
    {
        return view('costs.indexMay')->with(['costs' => Auth::user()->costs()->get()]);
    }
    
    public function june(Cost $cost)
    {
        return view('costs.indexJune')->with(['costs' => Auth::user()->costs()->get()]);
    }
    
    public function july(Cost $cost)
    {
        return view('costs.indexJuly')->with(['costs' => Auth::user()->costs()->get()]);
    }
    
    public function august(Cost $cost)
    {
        return view('costs.indexAugust')->with(['costs' => Auth::user()->costs()->get()]);
    }
    
    public function september(Cost $cost)
    {
        return view('costs.indexSeptember')->with(['costs' => Auth::user()->costs()->get()]);
    }
    
    public function october(Cost $cost)
    {
        return view('costs.indexOctober')->with(['costs' => Auth::user()->costs()->get()]);
    }
    
    public function november(Cost $cost)
    {
        return view('costs.indexNovember')->with(['costs' => Auth::user()->costs()->get()]);
    }
    
    public function december(Cost $cost)
    {
        return view('costs.indexDecember')->with(['costs' => Auth::user()->costs()->get()]);
    }
    
    public function show_cost(Cost $cost)
    {
        return view('costs.show_cost')->with(['cost' => $cost]);
    }
    
    public function create_cost(Cost $cost)
    {
        return view('costs.create_cost')->with(['cost' => $cost]);
    }
    
    public function total_cost(Cost $cost)
    {
        $rent = DB::table('costs')->where('user_id', Auth::user()->id)->value('rent');
        $water_cost = DB::table('costs')->where('user_id', Auth::user()->id)->value('water_cost');
        $utilitiy_cost = DB::table('costs')->where('user_id', Auth::user()->id)->value('utilitiy_cost');
        $food_cost = DB::table('costs')->where('user_id', Auth::user()->id)->value('food_cost');
        $phone_cost = DB::table('costs')->where('user_id', Auth::user()->id)->value('phone_cost');
        $other_cost = DB::table('costs')->where('user_id', Auth::user()->id)->value('other_cost');
        $total = 0;
        $total += $rent;
        $total += $water_cost;
        $total += $utilitiy_cost;
        $total += $food_cost;
        $total += $phone_cost;
        $total += $other_cost;
        
        return view('costs.total_cost')->with(['total' => $total]);
    }
    
    public function store(Request $request, Cost $cost)
    {
        $input = $request['cost'];
        $input += ['user_id' => $request->user()->id];  
        $input += ['total_cost' => $input["rent"] + $input["water_cost"] + $input["utilitiy_cost"] + $input["food_cost"] + $input["phone_cost"] + $input["other_cost"]];  
        $cost->fill($input)->save();
        return redirect('/hours/culculateHour');
    }
    
    public function edit(Cost $cost)
    {
        return view('costs.edit_cost')->with(['cost' => $cost]);
    }
    
    public function update(Cost $cost, Request $request)
    {
        $input = $request['cost'];
        $input += ['user_id' => $request->user()->id];  
        $input += ['total_cost' => $input["rent"] + $input["water_cost"] + $input["utilitiy_cost"] + $input["food_cost"] + $input["phone_cost"] + $input["other_cost"]];  
        $cost->fill($input)->save();
        
        return redirect('/costs/' . $cost->id);
    }
    
    public function delete(Cost $cost)
    {
        $cost->delete();
        return redirect('/');
    }
}
