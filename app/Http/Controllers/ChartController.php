<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Year;
use App\Models\Hour;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class ChartController extends Controller
{
    public function chart(Hour $hour, Year $year)
    {
        $data = Auth::user()->hours()->where('year_id', '1')->orderBy("month_id", "ASC")->pluck("amount")->toArray();
        $month = Hour::select('month_id')->where('year_id', '1')->orderBy("month_id", "ASC")->pluck("month_id")->toArray();
        $year = Year::where('year', '2023年')->value('year');
        
        $array = [];
        
        for($i = 1; $i < 13; $i++){
            if(in_array($i, $month)){
                $array["$i 月"] = array_shift($data);
            }else{
                $array["$i 月"] = 0;
            }
        }
        return view('hours.chart', compact('array'))->with(['year' => $year]);
    }
}
