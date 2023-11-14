<?php

namespace App\Repositories;

use App\Http\Requests\HourRequest;
use App\Models\Month;
use App\Models\Year;
use App\Models\Hour;

interface HourRepositoryInterface
{
    public function getHours();

    public function getYear(Year $year);

    public function getMonth(Month $month);

    public function getMonth_Id(HourRequest $request);
    
    public function getShow(Hour $hour);
    
    public function getChartMonth();
    
    public function getchartData();
}
