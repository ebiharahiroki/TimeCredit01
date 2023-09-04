<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cost;

class CostController extends Controller
{
    public function index(Cost $cost)
    {
        return $cost->get();
    }
}
