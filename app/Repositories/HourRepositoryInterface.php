<?php

declare(strict_types=1);

namespace App\Repositories;

use App\Http\Requests\HourRequest;
use App\Models\Hour;
use App\Models\Month;
use App\Models\Year;
use App\Services\GetFormRequest;

interface HourRepositoryInterface
{
    public function getHours();

    public function getYear(Year $year);

    public function getMonth(Month $month);

    public function getMonthId(HourRequest $request);
    
    public function createGetFormRequestInstance(HourRequest $request);
    
    public function store(GetFormRequest $getFormRequest): void;

    public function getShow(Hour $hour);

    public function getChartMonth();

    public function getChartData();
}
