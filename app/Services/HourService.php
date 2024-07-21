<?php

declare(strict_types=1);

namespace App\Services;

use App\Models\Hour;
use App\Http\Requests\HourRequest;
use App\Models\Month;
use App\Models\Year;
use App\Repositories\HourRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;
use App\Services\GetFormRequest;

class HourService
{
    private $hourRepository;

    public function __construct(HourRepositoryInterface $hourRepository)
    {
        $this->hourRepository = $hourRepository;
    }

    public function getIndex(): Collection
    {
        return $this->hourRepository->getHours();
    }

    public function deliverYear(Year $year): Collection
    {
        return $this->hourRepository->getYear($year);
    }

    public function deliverMonth(Month $month): Collection
    {
        return $this->hourRepository->getMonth($month);
    }

    public function getForm(HourRequest $request)
    {
        $monthId = $this->hourRepository->getMonthId($request);
        
        if ($monthId) {
            return redirect('/hours/create');
        }
        
        $getFormRequest = $this->hourRepository->createGetFormRequestInstance($request);
        
        $this->hourRepository->store($getFormRequest);
    }

    public function deliverShow(Hour $hour): Hour
    {
        return $this->hourRepository->getShow($hour);
    }

    public function getUpdateForm(GetFormRequest $getFormRequest, Hour $hour)
    {
        $updateRequest = [];
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
        $updateRequest += ['user_id' => $user_id, 'year_id' => $year_id, 'month_id' => $month_id,
            'target_value' => $target_value, 'rent' => $rent, 'water_cost' => $water_cost,
            'utility_cost' => $utility_cost, 'food_cost' => $food_cost, 'phone_cost' => $phone_cost,
            'other_cost' => $other_cost, 'income' => $income, 'hourly_wage' => $hourly_wage, 'total_cost' => $total_cost,
            'amount' => $amount];

        $hour->update($updateRequest);
    }

    public function deliverData(): array
    {
        $month = $this->hourRepository->getChartMonth();
        $data = $this->hourRepository->getChartData();

        $chartArray = [];

        for ($i = 1; $i < 13; $i++) {
            if (in_array($i, $month)) {
                $chartArray["$i 月"] = array_shift($data);
            } else {
                $chartArray["$i 月"] = 0;
            }
        }

        return $chartArray;
    }
}
