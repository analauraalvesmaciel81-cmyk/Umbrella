<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\BibliotecariaToken;
use Illuminate\Support\Facades\Hash;
use App\Models\Bibliotecaria;
use Carbon\Carbon;

class BibliotecariaApiMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if($request->has('token') && $request->has('bibliotecaria_id')){
            $token = BibliotecariaToken::where("bibliotecaria_id", $request->bibliotecaria_id)
            ->where("token", $request->token)
            ->where("valido_ate", ">=", Carbon::now())
            ->first();
            if($token){
                return $next($request);
            }

        return response()->json(['message' => 'Token inválido ou expirado', 'erro' => 's'], 200);
        }else{
            return response()->json(['message' => 'Token não fornecido', 'erro' => 's'], 200);
        }
    }
}
