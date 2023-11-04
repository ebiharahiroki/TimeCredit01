<?php

namespace App\Services;

use App\Models\Month;
use App\Models\Year;
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
        $hours = $this->hourRepository->getHours();

        return $hours;
    }

    public function deliverYear(Year $year)
    {
        $year = $this->hourRepository->getYear($year);

        return $year;
    }

    public function deliverMonth(Month $month)
    {
        $month = $this->hourRepository->getMonth($month);

        return $month;
    }
}
