<?php

namespace App\Http\Middleware;

use App\Models\Role;
use Closure;
use GuzzleHttp\Psr7\Response;
use Illuminate\Http\Request;

class IsAdmin
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
        if ($request->user()->role_id === Role::IS_ADMIN) {
            return $next($request);
        }

        return Response(['error' => 'Unauthorized.'], 401);
    }
}
