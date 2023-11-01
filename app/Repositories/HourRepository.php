<?php

namespace App\Repositories;

use Illuminate\Support\Facades\Auth;

class HourRepository implements HourRepositoryInterface
{
    public function getHours()
    {
        $hours = Auth::user()->hours()->orderBy('month_id', 'ASC')->get();

        return $hours;
    }
}
