<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cost;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\CostRequest;

class CostController extends Controller
{
    public function index(Cost $cost)
    {
        return view('costs.index')->with(['costs' => $cost->get()]);
    }
    
    public function show_cost(Cost $cost)
    {
        return view('costs.show_cost')->with(['cost' => $cost]);
    }
    
    public function create_cost(Cost $cost)
    {
        return view('costs.create_cost');
    }
    
    public function total_cost(Cost $cost)
    {
        $costs = DB::table('costs')->get()->where('user_id', Auth::user()->id);
        dd($cost);
        $cost = DB::table('costs')->sum('rent');
        
        return view('costs.total_cost')-with([$total_cost => $cost->total()]);
        
        return view('costs.total_cost', ['cost' => $cost]);
    }
    
    public function store(CostRequest $request, Cost $cost)
    {
        $input = $request['cost'];
        $cost->fill($input)->save();
        return redirect('/costs/' . $cost->id);
    }
    
    public function edit(Cost $cost)
    {
        return view('costs.edit_cost')->with(['cost' => $cost]);
    }
    
    public function update(Cost $cost, CostRequest $request)
    {
        $input_cost = $request['cost'];
        $cost->fill($input_cost)->save();
        
        return redirect('/costs/' . $cost->id);
    }
    
    public function delete(Cost $cost)
    {
        $cost->delete();
        return redirect('/');
    }
}
