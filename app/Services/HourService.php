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
        // $year = $this->hourRepository->getYear($year);

        return $this->hourRepository->getYear($year);
    }

    public function deliverMonth(Month $month)
    {
        $month = $this->hourRepository->getMonth($month);

        return $month;
    }

    public function getForm(HourRequest $request)
    {
        $year_id = $this->hourRepository->getMonth_Id($request);

        if ($year_id) {
            return redirect('/hours/create');
        }

        $input = $request['hour'];

        $input += ['user_id' => $request->user()->id];
        $input += ['total_cost' => $input['rent'] + $input['water_cost'] + $input['utilitiy_cost'] + $input['food_cost']
                                                                         + $input['phone_cost'] + $input['other_cost']];
        $input += ['amount' => ($input['income'] - $input['total_cost']) / $input['hourly_wage']];
        if (is_float(['amount'])) {
            ceil(float['amount']);
        }

        return $input;
    }
    
    public function deliverShow(Hour $hour)
    {
        return $this->hourRepository->getShow($hour);
    }
}
