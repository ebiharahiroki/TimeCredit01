<?php

declare(strict_types=1);

namespace App\Repositories;

use App\Http\Requests\HourRequest;
use App\Models\Hour;
use App\Models\Month;
use App\Models\Year;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Auth;

class GetUserInformation implements HourRepositoryInterface
{
    public function getUserAge(): Collection
    {
        return Auth::user()->hours()->orderBy('month_id', 'ASC')->get();
    }
}
