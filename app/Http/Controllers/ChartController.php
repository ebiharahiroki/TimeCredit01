<?php

namespace App\Http\Controllers;

use App\Services\HourService;

class ChartController extends Controller
{
    private $hourService;

    public function __construct(hourService $hourService)
    {
        $this->hourService = $hourService;
    }

    public function chart()
    {
        $array = $this->hourService->deliverData();

        return view('hours.chart', compact('array'));
    }
}
