<?php
/**
 * --------------------------------------------------------------------
 * Additional Routing HMVC
 * --------------------------------------------------------------------
 *
 * Create additional custom routes for your hmvc applications
 *  
 */

/** 
 * Examples Routers
 * This is Router To Modules\Admin\Controllers 
 * 
 * Endpoint : http://example.com/admin/dashboard
 */
$routes->group("admin/dashboard", ["namespace" => "Modules\Admin\Controllers"], function ($routes) {
    $routes->match(["get", "post"], "/", "Dashboard::index");
});