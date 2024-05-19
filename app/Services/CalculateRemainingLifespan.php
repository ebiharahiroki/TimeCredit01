<?php

declare(strict_types=1);

namespace App\Services;

use App\Models\Hour;
use App\Models\Month;
use App\Models\Year;
use App\Repositories\HourRepositoryInterface as HourRepository;
use Illuminate\Database\Eloquent\Collection;

class CalculateRemainingLifespan implements CalculateInterface
{
    private $hourRepository;

    public function __construct(HourRepository $hourRepository)
    {
        $this->hourRepository = $hourRepository;
    }

    public function caluculateRemainingLifespan(): Collection
    {
        return $this->hourRepository->getHours();
    }
}
