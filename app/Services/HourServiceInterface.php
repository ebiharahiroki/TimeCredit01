<?php

namespace App\Services;

use App\Http\Requests\HourRequest;
use App\Models\Month;
use App\Models\Year;

interface HourServiceInterface
{
    public function getIndex();

    public function deliverYear(Year $year);

    public function deliverMonth(Month $month);
    
    public function getForm(HourRequest $request);
}
