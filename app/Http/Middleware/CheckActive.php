<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class CheckActive
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
        if(Auth::user()->is_active !== config('common.is_active.active')){
            // Lỗi 403 FObidden
            abort(403);
        }
        return $next($request);
    }
}
