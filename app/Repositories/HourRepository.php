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
        $hours = Auth::user()->hours()->orderBy('month_id', 'ASC')->get();

        return $hours;
    }

    public function getYear(Year $year)
    {
        $years = $year->get();

        return $years;
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
}
