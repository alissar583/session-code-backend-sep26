<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckAccessCodeMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next, string $code): Response
    {
        if($request->access_code != $code) {
            return response()->json([
                'message' => "Access Denied"
            ],401);
        }
        return $next($request);
    }
}
