<?php

namespace App\Http\Middleware;

use Closure;

class autenticacaoMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $padrao)
    {
        echo "$padrao <br>";

        if($padrao == 'ldap'){
            echo 'tudo certo';
        }
        if(true){
            return $next($request);
        } else{
            return Response('acesso negado');
        }

    }
}
