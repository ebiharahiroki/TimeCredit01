<?php

namespace App\Repositories;

use App\Http\Requests\HourRequest;
use App\Models\Hour;
use App\Models\Month;
use App\Models\Year;
use Illuminate\Support\Facades\Auth;

class HourRepository implements HourRepositoryInterface
{
    public function getHours()
    {
        return Auth::user()->hours()->orderBy('month_id', 'ASC')->get();
    }

    public function getYear(Year $year)
    {
        // $years = $year->get();

        return $year->get();
    }

    public function getMonth(Month $month)
    {
        $months = $month->get();

        return $months;
    }

    public function getMonth_Id(HourRequest $request)
    {
        $input = $request['hour'];
        $exist = Hour::where('month_id', $input['month_id'])->whereNull('deleted_at')->exists();

        return $exist;
    }

    public function getShow(Hour $hour)
    {
        return $hour;
    }
    
    public function getChartMonth()
    {
        return Hour::where('year_id', '1')->orderBy('month_id', 'ASC')->pluck('month_id')->toArray();
    }
    
    public function getchartData()
    {
        return Auth::user()->hours()->where('year_id', '1')->orderBy('month_id', 'ASC')->pluck('amount')->toArray();
    }
}
