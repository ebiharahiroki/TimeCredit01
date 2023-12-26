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
        $getFormRequest = new GetFormRequest($user_id, $year_id, $month_id, $target_value, $rent, $water_cost, 
        $utility_cost, $food_cost, $phone_cost, $other_cost, $total_cost, $income, $hourly_wage, $amount);
        $input = $getFormRequest->getUserId();
        $input += $getFormRequest->getRent() + $getFormRequest->getWaterCost()
                                + $getFormRequest->getUtilityCost() + $getFormRequest->getFoodCost()
                             + $getFormRequest->getPhoneCost() + $getFormRequest->getOtherCost();
        $amount = ($getFormRequest->getIncome() - $getFormRequest->getTotalCost()) / $getFormRequest->getHourlyWage();
        $input += $getFormRequest->amount = ceil($amount);
        $hour->fill($input)->save();
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
