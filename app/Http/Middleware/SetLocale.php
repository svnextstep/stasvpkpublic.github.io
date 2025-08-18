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

        if (!$request->routeIs("ie_warning") 
            && is_null($request->session()->get("ie_warning"))
            && ( strpos($request->header('User-Agent'), "Trident") !== false || strpos($request->header('User-Agent'), "MSIE") !== false )
        ) {
          /* keep current url to return */
          if (!$request->session()->get("ie_warning_url")) {
            $request->session()->push("ie_warning_url", $request->url());
          } else {
            $request->session()->put("ie_warning_url", $request->url());
          }
          
          return redirect()->route("ie_warning");
        }
        
        $langPrefix = (Session::has('locale'))? Session::get('locale') : ltrim($request->route()->getPrefix(), '/');
        if ($langPrefix) {
          App::setLocale($langPrefix);
        }
        return $next($request);
    }
}
