<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Hour;

class Month extends Model
{
    use HasFactory;
    
    public function hours()
    {
        return $this->hasMany(Hour::class);
    }
}
