<?php

namespace App\Http\Responses;

use Illuminate\Support\Facades\Auth;
use Laravel\Fortify\Contracts\LoginResponse as LoginResponseContract;

class LoginResponce implements LoginResponseContract
{

    public function toResponse($request)
    {
        return $request->wantsJson()
            ? response()->json(['two_factor' => false])
            : redirect()->intended(
                Auth::user()->login_type == "1" ? route("superadmin.dashboard") : (Auth::user()->login_type == "2" ? route("admin.dashboard") :(Auth::user()->login_type == "3" ? route("customer.dashboard") :(Auth::user()->login_type == "4" ? route("customeruser.dashboard") : route("cust.dashboard"))))
            );

    }
}
