<?php 

use \Slim\Slim;
use \cq\Page;
use \cq\PageTeacher;

//ROTAS PARA TRABALHO DO PROFESSOR;


// Criar uma questão de múltipla escolha
$app->get("/", function() {  
	$page = new Page();
	$page->setTpl("index");
});

