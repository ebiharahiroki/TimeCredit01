<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Requests\HourRequest;
use App\Models\Hour;
use App\Models\Month;
use App\Models\Year;
use App\Repositories\HourRepositoryInterface as HourRepository;
use App\Services\GetFormRequest;
use App\Services\HourService;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class LifespanController extends Controller
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
        $hours = $this->hourService->caluculateRemainingLifespan();

        return view('hours.index', compact('hours'));
    }
}
