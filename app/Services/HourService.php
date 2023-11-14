<?php

namespace App\Services;

use App\Http\Requests\HourRequest;
use App\Models\Month;
use App\Models\Year;
use App\Models\Hour;
use App\Repositories\HourRepositoryInterface as HourRepository;

class HourService implements HourServiceInterface
{
    private $hourRepository;

    public function __construct(HourRepository $hourRepo)
    {
        $this->hourRepository = $hourRepo;
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
        return $this->hourRepository->getMonth($month);;
    }

    public function getForm(HourRequest $request, Hour $hour)
    {
        $year_id = $this->hourRepository->getMonth_Id($request);

        if ($year_id == true) {
            return redirect('/hours/create');
        }

        $input = $request['hour'];

        $input += ['user_id' => $request->user()->id];
        $input += ['total_cost' => $input['rent'] + $input['water_cost'] + $input['utilitiy_cost'] + $input['food_cost']
                                                                         + $input['phone_cost'] + $input['other_cost']];
        $input += ['amount' => ceil($input['income'] - $input['total_cost']) / $input['hourly_wage']];
        // if (is_float($input['amount']) == true) {
        //     $input += ['amount' => ceil($input['amount'])];
        // }
        
        $hour->fill($input)->save();
    }
    
    public function deliverShow(Hour $hour)
    {
        return $this->hourRepository->getShow($hour);
    }
    
    public function deliverData()
    {
        $month = $this->hourRepository->getChartMonth();
        $data = $this->hourRepository->getchartData();
        
        $chartArray = [];

        for ($i = 1; $i < 13; $i++) {
            if (in_array($i, $month)) {
                $chartArrayarray["$i 月"] = array_shift($data);
            } else {
                $chartArrayarray["$i 月"] = 0;
            }
        }
        
        return $chartArrayarray;
    }
}
