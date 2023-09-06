<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cost;

class CostController extends Controller
{
    public function culculate_cost(Cost $cost)
    {
        return view('costs.culculate_cost');
    }
}
