<?php

namespace App\Http\Middleware;

use Closure;

class HeadersMiddleware
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
        $response = $next($request);

        $response->header('X-Frame-Options', 'SAMEORIGIN')
                 ->header('Referrer-Policy', 'no-referrer-when-downgrade')
                 ->header('Strict-Transport-Security', 'max-age=63072000; includeSubDomains')
                 ->header('X-XSS-Protection', '1; mode=block');

        return $response;
    }
}
