<?php

namespace App\Http\Middleware;

use Session;
use Closure;

class TwitCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */


    public function handle($request, Closure $next){

        if(Session::get('oauth_request_token_secret')){
            return $next($request);
        }else{
            return redirect('/login');
        }

    }
}
