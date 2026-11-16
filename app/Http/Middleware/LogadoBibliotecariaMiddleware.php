<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\Professor;
use App\Models\ProfessorToken;
use App\Models\Bibliotecaria;
use App\Models\BibliotecariaToken;
use App\Controllers\HomeController;
use App\Controllers\BibliotecariaController;
use Illuminate\Support\Facades\Cookie;
use Carbon\Carbon;


class LogadoBibliotecariaMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Cookie::has('bibliotecaria_id') && Cookie::has('token')) {
            $bibliotecaria_id = Cookie::get('bibliotecaria_id');
            $token = Cookie::get('token');
            $token_biblioteca = BibliotecariaToken::where('id', $bibliotecaria_id)
                ->where('token', $token)
                ->where('valido_ate', '>', Carbon::now())
                ->first();
            if ($token_biblioteca) {
                $bibliotecaria = Bibliotecaria::find($bibliotecaria_id);
                $request->bibliotecaria = $bibliotecaria;
                $request->sou_bibliotecaria = "S";
                if ($bibliotecaria) {
                    return $next($request);
                } else {
                    Cookie::forget('bibliotecaria_id');
                    Cookie::forget('token');
                    return redirect()->route('login');
                }
            }

                return $next($request);
            } else {
                Cookie::forget('bibliotecaria_id');
                Cookie::forget('token');
                return redirect()->route('login');
            }
     }
}