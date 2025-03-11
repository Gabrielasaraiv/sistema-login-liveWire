<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $role)//adicionar o $role e retirar o response
    {
        if(auth()->check() && auth()->user()->role === $role){
            return $next($request); 
        }
        //verifica se o usuario esta logado, seu tipo de usuario e se ele é igual ao parametro que passamos
        //no caso, se o usuário nao for admin, e tentar acessar a página de admin vai retornar um erro ou vice versa
        abort(403, 'acesso não autorizado');
    }
}
