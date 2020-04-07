<?php

namespace App\Http\Middleware;

use Closure;

class EnsureMobileAndEmailAreVerified
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        
        if (! $request->user()->hasVerifiedMobile() && ! $request->user()->hasVerifiedEmail()) {

            return redirect('verify-otp');
            
        }

        return $next($request);
    }
}
