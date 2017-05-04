<?php

namespace App\Http\Middleware;

use Closure;

class redirectIfNotAuthor
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
        if(!\Auth::user()->isAuthor()){//object od klasa user
            return redirect('home');
        }
        return $next($request);//povikaj go sledniot middleware
    }
}
