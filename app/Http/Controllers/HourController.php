<?php

namespace App\Http\Controllers;

use App\Http\Requests\HourRequest;
use App\Models\Hour;
use App\Models\Month;
use App\Models\Year;
use App\Services\HourService;
use App\Repositories\HourRepositoryInterface as HourRepository;

class HourController extends Controller
{
    private $hourService;
    private $hourRepository;

    public function __construct(hourService $hourService, HourRepository $hourRepo)
    {
        $this->hourService = $hourService;
        $this->hourRepository = $hourRepo;
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
        $month_id = $this->hourRepository->getMonth_Id($request);
        
        if ($month_id) {
            return redirect('/hours/create');
        }
        
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
        $this->hourService->updateForm($request, $hour);

        return redirect('/hours/'.$hour->id);
    }

    public function delete(Hour $hour)
    {
        $hour->delete();

        return redirect('/');
    }
}
