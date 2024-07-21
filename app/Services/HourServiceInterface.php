<?php

declare(strict_types=1);

namespace App\Services;

use App\Models\Hour;
use App\Models\Month;
use App\Models\Year;
use App\Http\Requests\HourRequest;
use App\Services\GetFormRequest;

interface HourServiceInterface
{
    public function getIndex();

    public function deliverYear(Year $year);

    public function deliverMonth(Month $month);

    public function getForm(HourRequest $request);

    public function deliverShow(Hour $hour);

    public function getUpdateForm(GetFormRequest $getFormRequest, Hour $hour);

    public function deliverData();
}
