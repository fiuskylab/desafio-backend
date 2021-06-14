<?php

namespace App\Http\Middleware;

use App\Traits\HttpStatus;
use Closure;
use Illuminate\Http\Request;

class IsAdmin
{
    use HttpStatus;
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (auth()->user()->role == 'admin') {
            return $next($request);
        }
        return response()->json($this->getForbidden(), [
            'message' => 'Endpoint not allowed'
        ]);
    }
}
