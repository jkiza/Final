<?php
# @Author: izzy
# @Date:   2019-12-06T14:29:37+00:00
# @Last modified by:   izzy
# @Last modified time: 2019-12-06T15:13:03+00:00




namespace App\Http\Middleware;

use Closure;

class AuthRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, String $role)
    {
        if (!$request->user() || !$request->user()->hasRole($role)) {

          return redirect()->route('home');
        }
        return $next($request);
    }
}
