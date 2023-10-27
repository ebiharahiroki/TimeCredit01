<?php

namespace App\Http\Controllers;

use App\Models\Hour;
use Illuminate\Support\Facades\Auth;

class ChartController extends Controller
{
    public function chart(Hour $hour)
    {
        $data = Auth::user()->hours()->where('year_id', '1')->orderBy("month_id", "ASC")->pluck("amount")->toArray();
        $month = Hour::where('year_id', '1')->orderBy("month_id", "ASC")->pluck("month_id")->toArray();
        
        $array = [];
        
        for($i = 1; $i < 13; $i++){
            if(in_array($i, $month)){
                $array["$i 月"] = array_shift($data);
            }else{
                $array["$i 月"] = 0;
            }
        }
        return view('hours.chart', compact('array'));
    }
}
