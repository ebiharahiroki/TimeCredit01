<?php

declare(strict_types=1);

namespace App\Services;

use App\Models\Hour;
use App\Models\Month;
use App\Models\Year;

interface CalculateInterface
{
    public function getIndex();
}
