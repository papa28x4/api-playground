<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class SayCheese
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        dump("SAY CHEESE");
        return $next($request);
        // return new JsonResponse([
        //     'data' => 'cheese'
        // ]);
    }

    public function terminate($request, $response){
        dump('BYE');
    }
}
