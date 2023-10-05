<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Month;
use App\Models\Year;
use App\Models\Hour;
use Illuminate\Support\Facades\DB;

class ChartController extends Controller
{
    public function chart(Hour $hour, Month $month, Year $year)
    {
        // $labels = DB::table('months')->pluck('month');
        // $data = Hour::where('year_id', '1')->orderBy("month_id", "ASC")->pluck('amount', 'month_id');
        
        $data = Hour::where('year_id', '1')->orderBy("month_id", "ASC")->pluck("amount")->toArray();
        $month = Hour::select('month_id')->where('year_id', '1')->orderBy("month_id", "ASC")->pluck("month_id")->toArray();
        $year = Year::where('year', '2023年')->value('year');
        // dd($month);
        // $month = array_map('intval', $month);
        
        $array = [];
        
        for($i = 1; $i < 13; $i++){
            if(in_array($i, $month)){
                $array["$i 月"] = array_shift($data);
            }else{
                $array["$i 月"] = 0;
            }
        }
        return view('hours.chart', compact('array'))->with(['hour' => $hour])->with(['year' => $year]);
    }
}
