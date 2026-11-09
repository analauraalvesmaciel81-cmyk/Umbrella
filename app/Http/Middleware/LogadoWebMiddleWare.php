<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\ProfessorToken;
use App\Models\Professor;
use Illuminate\Support\Facades\Cookie;

class LogadoWebMiddleWare
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(cookie::has('token') && Cookie::has('professor_id')) {
        return $next($request);
        } else {
            return redirect('login');
        }
        return $next($request);
    }
}
