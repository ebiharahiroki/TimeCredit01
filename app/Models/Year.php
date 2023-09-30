<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Hour;

class Year extends Model
{
    use HasFactory;
    
    public function hour()
    {
        return $this->hasOne(Hour::class);
    }
}
