<?php

namespace App\Http\Middleware;

use App\Models\VisitorLog;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class LogVisitor
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (!session()->has('visitor_logged')) {
            VisitorLog::create([
                'ip_address' => $request->ip(),
                'visited_at' => now(),
            ]);

            session(['visitor_logged' => true]);
        }

        return $next($request);
    }
}
