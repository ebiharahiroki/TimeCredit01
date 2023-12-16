<?php

namespace App\Services;

class GetFormRequest
{
    private $userId;
    private $yearId;
    private $monthId;
    private $targetValue;
    private $rent;
    private $waterCost;
    private $utilityCost;
    private $foodCost;
    private $phoneCost;
    private $otherCost;
    private $totalCost;
    private $income;
    private $hourlyWage;
    private $amount;
    
    public __construct()
    
    public function getUserId()
    {
        return $this->userId;
    }
    
    public function getYearId()
    {
        return $this->yearId;
    }
    
    public function getTargetValue()
    {
        return $this->targetValue;
    }
    
    public function getRent()
    {
        return $this->rent;
    }
    
    public function getWaterCost()
    {
        return $this->waterCost;
    }
    
    public function getUtilityCost()
    {
        return $this->utilityCost;
    }
    
    public function getFoodCost()
    {
        return $this->foodCost;
    }
    
    public function getPhoneCost()
    {
        return $this->phoneCost;
    }
    
    public function getOtherCost()
    {
        return $this->otherCost;
    }
    
    public function getTotalCost()
    {
        return $this->totalCost;
    }
    
    public function getIncome()
    {
        return $this->income;
    }
    
    public function getHourlyWage()
    {
        return $this->hourlyWage;
    }
    
    public function getAmount()
    {
        return $this->amount;
    }
}
