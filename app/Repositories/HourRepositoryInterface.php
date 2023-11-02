<?php

namespace App\Repositories;

use App\Models\Year;
use App\Models\Month;

interface HourRepositoryInterface
{
    public function getHours();
    
    public function getYear(Year $year);
    
    public function getMonth(Month $month);
}
