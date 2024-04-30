<?php

declare(strict_types=1);

namespace App\Repositories;

use App\Http\Requests\HourRequest;
use App\Models\Hour;
use App\Models\Month;
use App\Models\Year;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Auth;

class HourRepository implements HourRepositoryInterface
{
    public function getHours(): Collection
    {
        return Auth::user()->hours()->orderBy('month_id', 'ASC')->get();
    }

    public function getYear(Year $year): Collection
    {
        return $year->get();
    }

    public function getMonth(Month $month): Collection
    {
        return $month->get();
    }

    public function getMonthId(HourRequest $request): bool
    {
        $input = $request['hour'];

        return Auth::user()->hours()->where('month_id', $input['month_id'])->whereNull('deleted_at')
                                                                            ->exists();
    }

    public function getShow(Hour $hour): Hour
    {
        return $hour;
    }

    public function getChartMonth(): array
    {
        return Auth::user()->hours()->orderBy('month_id', 'ASC')->pluck('month_id')->toArray();
    }

    public function getChartData(): array
    {
        return Auth::user()->hours()->orderBy('month_id', 'ASC')->pluck('amount')->toArray();
    }
}
