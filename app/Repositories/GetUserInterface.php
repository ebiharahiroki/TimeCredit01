<?php

declare(strict_types=1);

namespace App\Repositories;

use App\Http\Requests\HourRequest;
use App\Models\Hour;
use App\Models\Month;
use App\Models\Year;

interface GetUserInterface
{
    public function getHours();
}
