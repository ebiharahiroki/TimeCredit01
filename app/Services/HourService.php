<?php

namespace App\Services;

use App\Http\Requests\HourRequest;
use App\Models\Hour;
use App\Models\Month;
use App\Models\Year;
use App\Repositories\HourRepositoryInterface as HourRepository;
use App\Services\GetFormRequest;

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

    public function getForm(GetFormRequest $getFormRequest)
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

    public function updateForm(HourRequest $request, Hour $hour)
    {
        $input = $request['hour'];
        $input += ['user_id' => $request->user()->id];
        $input += ['total_cost' => $input['rent'] + $input['water_cost'] + $input['utility_cost'] + $input['food_cost']
                                                                        + $input['phone_cost'] + $input['other_cost']];
        $amount = ($input['income'] - $input['total_cost']) / $input['hourly_wage'];
        $input += ['amount' => ceil($amount)];
        $hour->fill($input)->save();
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
