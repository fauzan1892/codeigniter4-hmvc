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
 * This is Router To Modules\Web\Controllers 
 * This is routes default, you can find it and modify this default routes to file : ci4-app/app/Config/Routes.php 
 * 
 * Endpoint : http://example.com/
 * Endpoint : http://example.com/test-page
 */
$routes->get("/", "Home::index");
$routes->get("/test-page", "Home::testPage");
