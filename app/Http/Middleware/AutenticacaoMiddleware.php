<?php

namespace App\Http\Middleware;

use Closure;
use http\Env\Request;

class AutenticacaoMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $metodo_auth)
    {
        echo $metodo_auth. '<br>';

        //Verificar se o usuário possui acesso a rota
        if ($metodo_auth == 'padrao') {
            echo 'Verificar o usuário e senha no banco de dados'.
            '<br>';
        }

        if ($metodo_auth == 'ldap'){
            echo 'Verificar o usuário e senha no AD'.
            '<br>';
        }

        if (false) {
             return $next($request);
        } else {
            return Response('Acesso negado! Bateu a nave, precisa estar logado!!');
        }
    }
}
