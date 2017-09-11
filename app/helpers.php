<?php

if (!function_exists('isRoute')) {
    /**
     * Is current route for active
     *
     * @param string|array $routes
     * @param string $returnString
     * @return string
     */
    function isRoute($routes, $returnString = 'is-active') {
        if (!is_array($routes)) {
            $routes = [$routes];
        }

        $currentRoute = request()->route()->getName();
        return in_array($currentRoute, $routes) ? $returnString : '';
    }
}

if (!function_exists('isRouteGroup')) {
    /**
     * Is current route in group for active
     *
     * @param string $prefix
     * @param string $returnString
     * @return string
     */
    function isRouteGroup($prefix, $returnString = 'is-active') {
        $currentRoute = request()->route()->getName();
        return preg_match('/' . $prefix . '\./', $currentRoute) ? $returnString : '';
    }
}