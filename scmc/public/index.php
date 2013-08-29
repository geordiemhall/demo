<?php

require ("../vendor/autoload.php");

$router = new \SCMC\Router;

$routes = array(
	'/' => '',
	'/monsters' => 'Main:monsters',
	'/about' => 'Main:about',
	'/get-involved' => 'Main:getinvolved',
	'/diaries' => 'Main:diaries',
	// '/notify' => 'Main:notify',

);

$router->addRoutes($routes);

$router->set404Handler("Main:notFound");

$router->run();

