<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use Illuminate\Database\Eloquent\SoftDeletes;

class Lifespan extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    
    protected $fillable = [
        'user_id',
        'age',
        'life_hour',
        'life_week',
        'life_month',
];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
