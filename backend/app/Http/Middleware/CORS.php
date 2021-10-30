<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CORS
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        header('Access-Control-Allow-Origin: *');
        header('Access-Control-Allow-Methods: POST, GET, PATCH, OPTIONS, PUT, DELETE');
        header('Access-Control-Allow-Headers: Origin, Content-Type, Accept, X-Auth-Token, Authorization, Charset, boundary, Content-Length, X-Requested-With');
        return $next($request);

        //$response = $next($request)
        //header('Access-Control-Allow-Origin', '*');
        //header('Access-Control-Allow-Methods', 'POST, GET, PATCH, OPTIONS, PUT, DELETE');
        //header('Access-Control-Allow-Headers', 'Origin, Content-Type, Accept, X-Auth-Token, Authorization, Charset, boundary, Content-Length, X-Requested-With');
        //return $next($request);
    }
}
