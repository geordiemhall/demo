<?php

$settings = array(
	'view' => new \Slim\Extras\Views\Twig(),
	'templates.path' => '../views',
	'model' => (Object)array(
		"message" => "Hello World"
	)
);

return $settings;
