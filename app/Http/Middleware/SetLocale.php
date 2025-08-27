<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class SetLocale
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
//       if (Session::has('locale')) {
//            App::setLocale(Session::get('locale'));
//        }

        $langPrefix = (Session::has('locale'))? Session::get('locale') : ltrim($request->route()->getPrefix(), '/');
        if ($langPrefix) {
          App::setLocale($langPrefix);
        }
        return $next($request);
    }
}
