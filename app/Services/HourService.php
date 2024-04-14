<?php

declare(strict_types=1);

namespace App\Services;

use App\Http\Requests\HourRequest;
use App\Models\Hour;
use App\Models\Month;
use App\Models\Year;
use App\Repositories\HourRepositoryInterface as HourRepository;
use App\Services\GetFormRequest;
use App\Services\UpdateFormRequest;

class HourService implements HourServiceInterface
{
    private $hourRepository;

    public function __construct(HourRepository $hourRepository)
    {
        $this->hourRepository = $hourRepository;
    }

    public function getIndex()
    {
        return $this->hourRepository->getHours();
    }

    public function deliverYear(Year $year)
    {
        return $this->hourRepository->getYear($year);
    }

    public function deliverMonth(Month $month)
    {
        return $this->hourRepository->getMonth($month);
    }

    public function getForm(GetFormRequest $getFormRequest): void
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
        $formRequest += array('user_id' => $user_id, 'year_id' => $year_id, 'month_id' => $month_id, 
        'target_value' => $target_value, 'rent' => $rent, 'water_cost' => $water_cost, 
        'utility_cost' => $utility_cost, 'food_cost' => $food_cost, 'phone_cost' => $phone_cost, 
        'other_cost' => $other_cost, 'income' => $income, 'hourly_wage' => $hourly_wage, 'total_cost' => $total_cost, 
        'amount' => $amount);
        $hour = new Hour();
        $hour->create($formRequest);
    }

    public function deliverShow(Hour $hour)
    {
        return $this->hourRepository->getShow($hour);
    }

    public function updateForm(updateFormRequest $updateFormRequest)
    {
        $updateRequest = [];
        $user_id = $updateFormRequest->getUserId();
        $target_value = $updateFormRequest->getTargetValue();
        $rent = $updateFormRequest->getRent();
        $water_cost = $updateFormRequest->getWaterCost();
        $utility_cost = $updateFormRequest->getUtilityCost();
        $food_cost = $updateFormRequest->getFoodCost();
        $phone_cost = $updateFormRequest->getPhoneCost();
        $other_cost = $updateFormRequest->getOtherCost();
        $income = $updateFormRequest->getIncome();
        $hourly_wage = $updateFormRequest->getHourlyWage();
        
        $total_cost = $updateFormRequest->getRent() + $updateFormRequest->getWaterCost()
                                + $updateFormRequest->getUtilityCost() + $updateFormRequest->getFoodCost()
                             + $updateFormRequest->getPhoneCost() + $updateFormRequest->getOtherCost();
        $amount = ($updateFormRequest->getIncome() - $total_cost) / $updateFormRequest->getHourlyWage();
        $amount += ceil($amount);
        $updateRequest += array('user_id' => $user_id, 
        'target_value' => $target_value, 'rent' => $rent, 'water_cost' => $water_cost, 
        'utility_cost' => $utility_cost, 'food_cost' => $food_cost, 'phone_cost' => $phone_cost, 
        'other_cost' => $other_cost, 'income' => $income, 'hourly_wage' => $hourly_wage, 'total_cost' => $total_cost, 
        'amount' => $amount);
        $hour = new Hour();
        $hour->create($updateRequest);
    }

    public function deliverData()
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
