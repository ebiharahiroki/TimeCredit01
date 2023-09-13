<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cost extends Model
{
    use SoftDeletes;
    use HasFactory;
    
    
    protected $fillable = [
    'rent',
    'water_cost',
    'utilitiy_cost',
    'food_cost',
    'phone_cost',
    'other_cost',
];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
