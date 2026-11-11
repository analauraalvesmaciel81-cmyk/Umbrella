<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\ProfessorToken;
use App\Models\Professor;
use App\Controllers\HomeController;
use App\Controllers\BibliotecariaController;
use Illuminate\Support\Facades\Cookie;
use Carbon\Carbon;

class LogadoWebMiddleWare
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(Cookie::has('professor_id') && Cookie::has('token')) {
            $professor_id = Cookie::get('professor_id');
            $token = Cookie::get('token');
            $token_professor = ProfessorToken::where('professor_id', $professor_id)
                ->where('token', $token)
                ->where('valido_ate', '>',Carbon::now())
                ->first();
                if($token_professor){
                    $professor = Professor::find($professor_id);
                    $request->professor = $professor;
                    $bibliotecaria = Bibliotecaria::where('professor_id', $professor_id)->first();
                    if($bibliotecaria){
                        $request->bibliotecaria = 'S';
                    }else{
                        $request->bibliotecaria = 'N';
                    }
                    return $next($request);
                }else{
                    Cookie::forget('professor_id');
                    Cookie::forget('token');
                    return redirect()->route('login');
                }
            return $next($request);
        } else {
            Cookie::forget('professor_id');
            Cookie::forget('token');
            return redirect()->route('login');
        }
    }
}
