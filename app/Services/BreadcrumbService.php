<?php

namespace App\Services;

use Illuminate\Support\Facades\Route;

class BreadcrumbService
{
    // Define routes to exclude from breadcrumb generation
    protected $excludeRoutes = [
        'root',
        'api.*', // Exclude all API routes
        'test.*', // Exclude test routes
    ];

    // Define custom breadcrumb names for specific routes
    protected $customNames = [];

    public function __construct()
    {
        // Load custom names from configuration (optional)
        $this->customNames = config('breadcrumbs.custom_names', []);
    }

    public function generate()
    {
        $breadcrumbs = [];
        $currentRoute = Route::current();

        if ($currentRoute) {
            // Get the current route name and URI
            $routeName = $currentRoute->getName();
            $routeUri = $currentRoute->uri();

            // Exclude routes based on patterns
            foreach ($this->excludeRoutes as $pattern) {
                if (fnmatch($pattern, $routeName)) {
                    return []; // Return an empty array for excluded routes
                }
            }

            // Add "Home" as the root breadcrumb
            $breadcrumbs[] = ['name' => __('Home'), 'url' => '/'];

            // Skip URI segments entirely if the route has a name
            if ($routeName) {
                // Check for a translation first
                $translatedLabel = __($routeName);
                if ($translatedLabel !== $routeName) {
                    $breadcrumbs[] = ['name' => $translatedLabel, 'url' => $routeUri];
                }
                // Fallback to custom names
                elseif (isset($this->customNames[$routeName])) {
                    $breadcrumbs[] = ['name' => $this->customNames[$routeName], 'url' => $routeUri];
                }
                // Fallback to default behavior (splitting the route name into words)
                else {
                    $breadcrumbs[] = [
                        'name' => str_replace('.', ' ', ucwords($routeName, '.')),
                        'url' => $routeUri,
                    ];
                }
            } else {
                // Generate breadcrumbs from URI segments only if the route has no name
                $segments = explode('/', trim($routeUri, '/'));
                $url = '';

                foreach ($segments as $segment) {
                    $url .= '/' . $segment;
                    $breadcrumbs[] = [
                        'name' => ucfirst(str_replace('-', ' ', $segment)), // Convert segment to readable text
                        'url' => $url,
                    ];
                }
            }
        }

        return $breadcrumbs;
    }
}
