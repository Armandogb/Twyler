<?php

namespace App\Http\Middleware;

use Session;
use Closure;
use Redirect;

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

        if(Session::get('access_token')){
            return $next($request);
        }else{
            return Redirect::route('app.landing')->with('flash_message', 'Somebodies not logged in.......');
        }

    }
}
