<?php

namespace App\Http\Controllers;

use App\Http\Requests\HourRequest;
use App\Models\Hour;
use App\Models\Year;
use App\Models\Month;
use App\Services\HourService;

class HourController extends Controller
{
    private $hourService;

    public function __construct(hourService $hourService)
    {
        $this->hourService = $hourService;
    }

    public function index()
    {
        $list = $this->hourService->getIndex();

        return view('hours.index')->with(['hours' => $list]);
    }

    public function create(Year $year, Month $month)
    {
        $year = $this->hourService->deliverYear($year);
        
        $month = $this->hourService->deliverMonth($month);
        
        return view('hours.create')->with(['years' => $year])
                                   ->with(['months' => $month]);
    }

    public function store(HourRequest $request, Hour $hour)
    {
        $input = $request['hour'];
        $exist = Hour::where('year_id', $input['year_id'])->where('month_id', $input['month_id'])
                                                          ->whereNull('deleted_at')->exists();

        if ($exist) {
            return redirect('/hours/create');
        }

        $input += ['user_id' => $request->user()->id];
        $input += ['total_cost' => $input['rent'] + $input['water_cost'] + $input['utilitiy_cost'] + $input['food_cost']
                                                                         + $input['phone_cost'] + $input['other_cost']];
        $input += ['amount' => ($input['income'] - $input['total_cost']) / $input['hourly_wage']];
        if (is_float(['amount'])) {
            ceil(float['amount']);
        }
        $hour->fill($input)->save();

        return redirect('/');
    }

    public function show(Hour $hour)
    {
        return view('hours.show')->with(['hour' => $hour]);
    }

    public function edit(Hour $hour)
    {
        return view('hours.edit')->with(['hour' => $hour]);
    }

    public function update(HourRequest $request, Hour $hour)
    {
        $input = $request['hour'];
        $input += ['user_id' => $request->user()->id];
        $input += ['total_cost' => $input['rent'] + $input['water_cost'] + $input['utilitiy_cost'] + $input['food_cost']
                                 + $input['phone_cost'] + $input['other_cost']];
        $input += ['amount' => ($input['income'] - $input['total_cost']) / $input['hourly_wage']];
        $hour->fill($input)->save();

        return redirect('/hours/'.$hour->id);
    }

    public function delete(Hour $hour)
    {
        $hour->delete();

        return redirect('/');
    }
}
