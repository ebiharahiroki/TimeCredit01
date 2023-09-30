<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Year;
use App\Models\Month;
use Illuminate\Database\Eloquent\SoftDeletes;

class Hour extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    
    protected $fillable = [
        'user_id',
        'year_id',
        'month_id',
        'rent',
        'water_cost',
        'utilitiy_cost',
        'food_cost',
        'phone_cost',
        'other_cost',
        'total_cost',
        'income',
        'hourly_wage',
        'amount',
];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function year()
    {
        return $this->belongsTo(Year::class);
    }
    
     public function month()
    {
        return $this->belongsTo(Month::class);
    }
}
