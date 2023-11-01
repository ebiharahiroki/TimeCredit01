<?php

namespace App\Services;

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
}
