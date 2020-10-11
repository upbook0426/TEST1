<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class HelloMiddleware
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
        $data =
[
    ['name'=>'山田', 'mail'=>'taro@yahoo'],
    ['name'=>'田中', 'mail'=>'tanaka@gmail'],
];
     $request->merge(['data'=>$data]);
        return $next($request);
}
}