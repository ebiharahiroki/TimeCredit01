<?php

namespace App\Repositories;

use Illuminate\Support\Facades\Auth;
use App\Models\Year;
use App\Models\Month;

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
}
