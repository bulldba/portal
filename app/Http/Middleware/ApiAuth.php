<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ApiAuth
{
    public function handle(Request $request, Closure $next)
    {
        if ($request->header('Authorization') !== 'Bearer as8d9dsf8asdfs8fsfa9f') {
            return response(['message' => 'Unauthorized'], 401);
        }

        return $next($request);
    }
}
