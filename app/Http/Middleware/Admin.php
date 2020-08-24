<?php

namespace App\Http\Middleware;

use Closure;

class Admin
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
        if (!\Auth::guest() && \Auth::user()->name=='admin')
        {
            return $next($request);
        }
        else
        {
            return redirect(route('admin.Login'))->with('error','Erişim Engellendi');
        }

    }
}
