<?php

namespace App\Repositories;

use App\Models\Month;
use App\Models\Year;

interface HourRepositoryInterface
{
    public function getHours();

    public function getYear(Year $year);

    public function getMonth(Month $month);
}
