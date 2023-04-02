<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class local
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {

        // IP Address Way
        $ipAddress = $request->ip();
        // Check if the IP address belongs to the Middle East region
        $isMiddleEast = preg_match('/^(?:2(?:2[4-9]|[3-9][0-9])|3(?:[0-5][0-9]|6[0-4])|4(?:[0-9]{2}|1[0-1][0-9]|12[0-4])|5(?:[0-4][0-9]|5[0-5])|62[0-9]|(?:8(?:5[0-5]|[6-9][0-9])|9(?:[0-9]{2}|[1-9][0-9]{3})))(?:\.[0-9]{1,3}){3}$/', $ipAddress);
        // Check if the IP address belongs to Turkey
        $isTurkey = preg_match('/^(?:31\.||^212\.154\.2[0-5]|212\.156\.1[6-9]|212\.156\.2[0-3]|212\.157\.1[6-9]|212\.157\.2[0-7])(?:\.[0-9]{1,3}){2}$/', $ipAddress);


        // Browser Language Way
        // $lang = substr($request->server('HTTP_ACCEPT_LANGUAGE'), 0, 2);
        // $acceptLang = ['ar', 'tr', 'en'];
        // $lang = in_array($lang, $acceptLang) ? $lang : 'ar';
        if (Session()->has('locale')) {
            App::setLocale(Session()->get('locale'));
        } else {
            // Browser Language Way

            // App::setLocale($lang);

            // IP Address Way
            if ($isMiddleEast) {
                App::setLocale('ar');
            } elseif ($isTurkey) {
                App::setLocale('tr');
            } else {
                App::setLocale('en');
            }
        }

        return $next($request);
    }
}
