<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Year extends Model
{
    use HasFactory;

    public function year(Year $year)
    {
        $years = $year->get;
        
        return $years;
    }

    public function hours()
    {
        return $this->hasMany(Hour::class);
    }
}
