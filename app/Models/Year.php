<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Hour;
use App\Models\User;

class Year extends Model
{
    use HasFactory;
    
    public function hours()
    {
        return $this->hasMany(Hour::class);
    }
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
