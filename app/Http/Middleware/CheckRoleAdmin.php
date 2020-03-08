<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class CheckRoleAdmin
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
        //Check auth by calling check_âuth middleware
        if(Auth::user()->role !== config('common.role.admin')){
            // Lỗi 403 FObidden
            abort(403);
        }
        return $next($request);
    }
}
