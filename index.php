<?php 

require_once("vendor/autoload.php");
use \Slim\Slim;
use \cq\Page;

//Cria rotas;
$app = new Slim();

$app->config('debug', true);

//Rota para a página inicial;
$app->get('/', function() {  
	$page = new Page();
	$page->setTpl('index');
});


$app->run();

 ?>