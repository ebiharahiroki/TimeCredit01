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
        $labels = DB::table('months')->pluck('month');
        $data = DB::table('hours')->pluck('amount');
        return view('hours.chart', ['months' => $month], compact('labels', 'data'));
    }
}
