<?php

namespace App\Http\Middleware;

use Closure;
use Dotenv\Exception\ValidationException;

class ApiKey
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
        $apiKey = env('API_KEY', '');

        return $request->hasHeader('x-api-key') && $request->header('x-api-key') == $apiKey ? (
            $next($request) )
            : ( response()->json(['error' => 'Unauthenticated.'], 401));
    }
}
