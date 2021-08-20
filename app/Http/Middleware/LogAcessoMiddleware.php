<?php

namespace App\Http\Middleware;

use Closure;
use App\Model\LogAcesso;

class LogAcessoMiddleware
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
       //

        //recuperar o IP do usuário que acessou e depois recuperar a rota acessada
        $ip = $request->server->get('REMOTE_ADDR');
        $rota = $request->getRequestUri();
        LogAcesso::create(['log' => "O IP $ip requisitou a rota $rota"]);
        return $next($request);
       // return Response('Saí daqui, bateu no middleware');
    }
}
