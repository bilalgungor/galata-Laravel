<?php

namespace App\Http\Middleware;

use App\Setting;
use Closure;
use Illuminate\Support\Facades\View;

class Share
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
        $data['settings'] = Setting::all();
        foreach ($data['settings'] as $key)
        {
            $settings[$key->settings_key]=$key->settings_value;
        }
        View::share($settings);
        return $next($request);
    }
}
