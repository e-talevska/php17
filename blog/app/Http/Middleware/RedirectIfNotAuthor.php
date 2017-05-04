<?php

namespace App\Http\Middleware;

use Closure;

class RedirectIfNotAuthor
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
        if(!\Auth::user()->isAuthor()) {
            return redirect('home');
        }
        return $next($request);
    }
}
