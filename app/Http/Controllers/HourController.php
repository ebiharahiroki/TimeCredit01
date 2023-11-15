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
        $hours = $this->hourService->getIndex();

        return view('hours.index', compact('hours'));
    }

    public function create(Year $year, Month $month)
    {
        $years = $this->hourService->deliverYear($year);
        $months = $this->hourService->deliverMonth($month);

        return view('hours.create', compact('years'), compact('months'));
    }

    public function store(HourRequest $request, Hour $hour)
    {
        $this->hourService->getForm($request, $hour);

        return redirect('/');
    }

    public function show(Hour $hour)
    {
        $hour = $this->hourService->deliverShow($hour);
        
        return view('hours.show', compact('hour'));
    }

    public function edit(Hour $hour)
    {
        return view('hours.edit')->with(['hour' => $hour]);
    }

    public function update(HourRequest $request, Hour $hour)
    {
        // $input = $request['hour'];
        // $input += ['user_id' => $request->user()->id];
        // $input += ['total_cost' => $input['rent'] + $input['water_cost'] + $input['utilitiy_cost'] + $input['food_cost']
        //                          + $input['phone_cost'] + $input['other_cost']];
        // $input += ['amount' => ($input['income'] - $input['total_cost']) / $input['hourly_wage']];
        // $hour->fill($input)->save();

        $this->hourService->updateForm($request, $hour);

        return redirect('/hours/'.$hour->id);
    }

    public function delete(Hour $hour)
    {
        $hour->delete();

        return redirect('/');
    }
}
