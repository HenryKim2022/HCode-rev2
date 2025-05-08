<?php

namespace App\Http\Middleware;

use Closure;
use App\Services\BreadcrumbService;

class GenerateBreadcrumbs
{
    protected $breadcrumbService;

    public function __construct(BreadcrumbService $breadcrumbService)
    {
        $this->breadcrumbService = $breadcrumbService;
    }

    public function handle($request, Closure $next)
    {
        // Debug the active locale
        // dd(app()->getLocale());

        // Generate breadcrumbs using the service
        $breadcrumbs = $this->breadcrumbService->generate();

        // Share breadcrumbs with all views
        view()->share('breadcrumbs', $breadcrumbs);

        return $next($request);
    }
}
