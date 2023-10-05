<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TwitterUser extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'twitter_id',
        'access_token',
        'token_limit',
    ];
}
