<?php
declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Requests\HourRequest;
use App\Models\Hour;
use App\Models\Month;
use App\Models\Year;
use Illuminate\View\View;
use App\Repositories\HourRepositoryInterface as HourRepository;
use App\Services\HourService;
use App\Services\GetFormRequest;
use Illuminate\Http\RedirectResponse;

class HourController extends Controller
{
    private $hourService;
    private $hourRepository;

    public function __construct(hourService $hourService, HourRepository $hourRepo)
    {
        $this->hourService = $hourService;
        $this->hourRepository = $hourRepo;
    }

    public function index(): View
    {
        $hours = $this->hourService->getIndex();
        return view('hours.index', compact('hours'));
    }

    public function create(Year $year, Month $month): View
    {
        $years = $this->hourService->deliverYear($year);
        $months = $this->hourService->deliverMonth($month);

        return view('hours.create', compact('years'), compact('months'));
    }

    public function store(HourRequest $request):RedirectResponse
    {
        $monthId = $this->hourRepository->getMonthId($request);
        
        if ($monthId) {
            return redirect('/hours/create');
        }
        
        $input = $request['hour'];
        $year_id = $input['year_id'];
        $month_id = $input['month_id'];
        $target_value = $input['target_value'];
        $rent = $input['rent'];
        $water_cost = $input['water_cost'];
        $utility_cost = $input['utility_cost'];
        $food_cost = $input['food_cost'];
        $phone_cost = $input['phone_cost'];
        $other_cost = $input['other_cost'];
        $income = $input['income'];
        $hourly_wage = $input['hourly_wage'];
        
        $getFormRequest = new GetFormRequest(auth()->id(), $year_id, $month_id, $target_value, 
        $rent, $water_cost, $utility_cost, $food_cost, $phone_cost, $other_cost, $income, 
        $hourly_wage);
        
        $this->hourService->getForm($getFormRequest);

        return redirect('/');
    }

    public function show(Hour $hour): View
    {
        $hour = $this->hourService->deliverShow($hour);

        return view('hours.show', compact('hour'));
    }

    public function edit(Hour $hour): View
    {
        return view('hours.edit', compact('hour'));
    }

    public function update(HourRequest $request, Hour $hour): RedirectResponse
    {
        $input = $request['hour'];
        $year_id = $input['year_id'];
        $month_id = $input['month_id'];
        $target_value = $input['target_value'];
        $rent = $input['rent'];
        $water_cost = $input['water_cost'];
        $utility_cost = $input['utility_cost'];
        $food_cost = $input['food_cost'];
        $phone_cost = $input['phone_cost'];
        $other_cost = $input['other_cost'];
        $income = $input['income'];
        $hourly_wage = $input['hourly_wage'];
        
        $getFormRequest = new GetFormRequest(auth()->id(), $year_id, $month_id, $target_value, 
        $rent, $water_cost, $utility_cost, $food_cost, $phone_cost, $other_cost, $income, 
        $hourly_wage);
        
        $this->hourService->getUpdateForm($getFormRequest, $hour);
        
        return redirect('/hours/'.$hour->id);
    }

    public function delete(Hour $hour): RedirectResponse
    {
        $hour->delete();

        return redirect('/');
    }
}
