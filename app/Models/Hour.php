<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use Illuminate\Database\Eloquent\SoftDeletes;

class Hour extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    
    protected $fillable = [
    'user_id',
    'current_cost',
    'income',
    'hourly_wage',
    'amount',
];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
