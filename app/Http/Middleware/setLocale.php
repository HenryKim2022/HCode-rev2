<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class setLocale
{
    public function handle(Request $request, Closure $next)
    {
        if ($request->route()->getName() !== 'lang.switch') {
            if (session()->has('locale')) {
                app()->setLocale(session()->get('locale'));
            }
        } else {
            app()->setLocale(config('app.fallback_locale')); // Fallback to the default locale
        }


        // Debug the active locale
        // dd(app()->getLocale());
        return $next($request);
    }
}
