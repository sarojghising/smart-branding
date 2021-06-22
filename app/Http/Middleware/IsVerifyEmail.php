<?php

namespace App\Http\Middleware;

use App\Models\Brand;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IsVerifyEmail
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $brand = Brand::where('is_email_verified' ,1)->first();

        if (!$brand) {

            Auth::guard('brand')->logout();

            return redirect()->route('brand.login.form')

                    ->with('error', 'You need to confirm your account. We have sent you an activation code, please check your email.');

          }

        return $next($request);
    }
}
