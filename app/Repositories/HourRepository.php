<?php

declare(strict_types=1);

namespace App\Repositories;

use App\Http\Requests\HourRequest;
use App\Models\Hour;
use App\Models\Month;
use App\Models\Year;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use App\Services\GetFormRequest;

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
    
    public function createGetFormRequestInstance(HourRequest $request)
    {
        $input = $request['hour'];
        $user_id = auth()->id();
        $year_id = $input['year_id'];
        $month_id = $input['month_id'];
        $target_value = $input['target_value'];
        $rent = $input['rent'];
        $water_cost = $input['water_cost'];
        $utility_cost = $input['utility_cost'];
        $food_cost = $input['food_cost'];
        $phone_cost = $input['phone_cost'];
        $other_cost = $input['other_cost'];
        $income = $input['income'];
        $hourly_wage = $input['hourly_wage'];

        return  new GetFormRequest($user_id, $year_id, $month_id, $target_value,
            $rent, $water_cost, $utility_cost, $food_cost, $phone_cost, $other_cost,
            $income, $hourly_wage);
    }
    
    public function store(GetFormRequest $getFormRequest): void
    {
        $formRequest = [];
        $user_id = $getFormRequest->getUserId();
        $year_id = $getFormRequest->getYearId();
        $month_id = $getFormRequest->getMonthId();
        $target_value = $getFormRequest->getTargetValue();
        $rent = $getFormRequest->getRent();
        $water_cost = $getFormRequest->getWaterCost();
        $utility_cost = $getFormRequest->getUtilityCost();
        $food_cost = $getFormRequest->getFoodCost();
        $phone_cost = $getFormRequest->getPhoneCost();
        $other_cost = $getFormRequest->getOtherCost();
        $income = $getFormRequest->getIncome();
        $hourly_wage = $getFormRequest->getHourlyWage();

        $total_cost = $getFormRequest->getRent() + $getFormRequest->getWaterCost()
                                + $getFormRequest->getUtilityCost() + $getFormRequest->getFoodCost()
                             + $getFormRequest->getPhoneCost() + $getFormRequest->getOtherCost();
        $amount = ($getFormRequest->getIncome() - $total_cost) / $getFormRequest->getHourlyWage();
        $amount += ceil($amount);
        $formRequest += ['user_id' => $user_id, 'year_id' => $year_id, 'month_id' => $month_id,
            'target_value' => $target_value, 'rent' => $rent, 'water_cost' => $water_cost,
            'utility_cost' => $utility_cost, 'food_cost' => $food_cost, 'phone_cost' => $phone_cost,
            'other_cost' => $other_cost, 'income' => $income, 'hourly_wage' => $hourly_wage, 
            'total_cost' => $total_cost, 'amount' => $amount];
        $hour = new Hour();
        $hour->create($formRequest);
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
