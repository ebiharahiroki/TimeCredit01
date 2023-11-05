<?php

namespace App\Http\Controllers;

use App\Http\Requests\HourRequest;
use App\Models\Hour;
use App\Models\Month;
use App\Models\Year;
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
        $hours = $this->hourService->getForm($request);
        
        $hour->fill($hours)->save();

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
