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
        return $year->get();
    }

    public function getMonth(Month $month)
    {
        $months = $month->get();

        return $months;
    }

    public function getMonthId(HourRequest $request)
    {
        $input = $request['hour'];

        return Auth::user()->hours()->where('month_id', $input['month_id'])->whereNull('deleted_at')->exists();
    }

    public function getShow(Hour $hour)
    {
        return $hour;
    }

    public function getChartMonth()
    {
        return Auth::user()->hours()->orderBy('month_id', 'ASC')->pluck('month_id')->toArray();
    }

    public function getChartData()
    {
        return Auth::user()->hours()->orderBy('month_id', 'ASC')->pluck('amount')->toArray();
    }
}
