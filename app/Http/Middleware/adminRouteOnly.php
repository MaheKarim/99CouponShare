<?php

namespace App\Http\Middleware;

use App\user_role;
use Closure;
use Illuminate\Support\Facades\Auth;

class adminRouteOnly
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
      if (Auth::guest()){
          return redirect (route('error404'));

      } else{
          if(Auth::user()->user_role->id != 1 ) {
              return redirect (route('error404'));
          }
      }
         return $next($request);

    }
}
