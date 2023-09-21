<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use Illuminate\Database\Eloquent\SoftDeletes;
// use Illuminate\Support\Facades\DB;

class Cost extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    
    protected $fillable = [
    'user_id',
    'rent',
    'water_cost',
    'utilitiy_cost',
    'food_cost',
    'phone_cost',
    'other_cost',
    'total_cost',
];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    // public function culcurate_cost()
    // {
    //     $costs = DB::table('costs')->value('rent')->get()->where('user_id', Auth::user()->id);
    //     print($costs);
    // }
}
