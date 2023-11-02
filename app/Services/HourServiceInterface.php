<?php

namespace App\Services;
use App\Models\Year;
use App\Models\Month;

interface HourServiceInterface
{
    public function getIndex();
    
    public function deliverYear(Year $year);
    
    public function deliverMonth(Month $month);
}
