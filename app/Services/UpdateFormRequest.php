<?php

namespace App\Services;

class UpdateFormRequest
{
    private $user_id;

    private $target_value;

    private $rent;

    private $water_cost;

    private $utility_cost;

    private $food_cost;

    private $phone_cost;

    private $other_cost;

    private $income;

    private $hourly_wage;

    public function __construct($user_id, $target_value, $rent, $water_cost, $utility_cost,
    $food_cost, $phone_cost, $other_cost, $income, $hourly_wage)
    {
        $this->user_id = $user_id;
        $this->target_value = $target_value;
        $this->rent = $rent;
        $this->water_cost = $water_cost;
        $this->utility_cost = $utility_cost;
        $this->food_cost = $food_cost;
        $this->phone_cost = $phone_cost;
        $this->other_cost = $other_cost;
        $this->income = $income;
        $this->hourly_wage = $hourly_wage;
    }

    public function getUserId()
    {
        return $this->user_id;
    }

    public function getTargetValue()
    {
        return $this->target_value;
    }

    public function getRent()
    {
        return $this->rent;
    }

    public function getWaterCost()
    {
        return $this->water_cost;
    }

    public function getUtilityCost()
    {
        return $this->utility_cost;
    }

    public function getFoodCost()
    {
        return $this->food_cost;
    }

    public function getPhoneCost()
    {
        return $this->phone_cost;
    }

    public function getOtherCost()
    {
        return $this->other_cost;
    }

    public function getIncome()
    {
        return $this->income;
    }

    public function getHourlyWage()
    {
        return $this->hourly_wage;
    }
}
