<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hour;

class HourController extends Controller
{
    public function culculate_hour(Hour $hour)
    {
        return $hour->get();
    }
}
