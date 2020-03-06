<?php 
// get dependences
require_once("vendor/autoload.php");
//get namespaces


$app = new \Slim\Slim();

$app->config('debug', true);

$app->get('/', function() {
    
    
	$page = new Hcode\Page();

	$page->setTpl("index");


});

$app->run();

 ?>