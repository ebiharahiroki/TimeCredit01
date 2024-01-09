<?php

namespace App\Repositories;

use App\Http\Requests\HourRequest;
use App\Models\Hour;
use App\Models\Month;
use App\Models\Year;

interface HourRepositoryInterface
{
    public function getHours();

    public function getYear(Year $year);

    public function getMonth(Month $month);

    public function getMonthId(HourRequest $request);

    public function getShow(Hour $hour);

    public function getChartMonth();

    public function getChartData();
}
