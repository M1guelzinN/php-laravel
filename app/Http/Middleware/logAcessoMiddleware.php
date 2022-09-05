<?php

namespace App\Http\Middleware;


use Closure;
use App\logAcesso;

class logAcessoMiddleware
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
        $ip = $request->server->get('REMOTE_ADDR');
        $rota = $request->getRequestUri();
        logAcesso::create(['log' => "IP $ip requisitou a rota $rota"]);
        // return Response('middleware intervenção');
        return $next($request);
    }
}
