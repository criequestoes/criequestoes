<?php 

require_once("vendor/autoload.php");

$app = new \Slim\Slim();

$app->config('debug', true);


$app->get('/', function() {  
	echo "Configurando o GitHub";
});


$app->run();

 ?>