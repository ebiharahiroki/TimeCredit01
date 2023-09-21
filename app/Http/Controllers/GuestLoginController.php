<?php

namespace App\Http\Controllers;

use App\Models\GuestUser;
use Illuminate\Support\Facades\Auth;

class GuestLoginController extends Controller
{
    private const GUEST_USER_ID = 1;
    
    public function guestLogin()
    {
        if(Auth::loginUsingId(self::GUEST_USER_ID)) {
            return redirect('/');
        }
        return redirect('/');
    }
}
