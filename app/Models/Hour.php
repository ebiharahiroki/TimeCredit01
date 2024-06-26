<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Hour extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'user_id',
        'year_id',
        'month_id',
        'target_value',
        'rent',
        'water_cost',
        'utility_cost',
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
