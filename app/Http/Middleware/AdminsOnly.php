<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;

class AdminsOnly
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $admins = ['Filip', 'Cemil', 'Heidi', 'Henrik', 'Ahmet', 'Alexander', 'Sebbe'];

        for ($i = 0; $i <= count($admins); $i++) {
            if (auth()->user()?->username != $admins[$i]) {
                abort(RedirectResponse::HTTP_FORBIDDEN);
            }

            return $next($request);
        }
    }
}
