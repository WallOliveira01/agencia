<?php

use \Wall\Page;

$app->get('/', function(){

	$page = new Page();

	$page->setTpl("index");
});

$app->get("/about", function(){

	$page = new Page([
		"header"=>false,
	]);

	$page->setTpl("about");
});

$app->get("/services", function(){

	$page = new Page([
		"header"=>false,
	]);

	$page->setTpl("services");
});

$app->get("/portfolio", function(){

	$page = new Page([
		"header"=>false,
	]);

	$page->setTpl("portfolio");
});

$app->get("/team", function(){

	$users = User::listAll();

	$page = new Page();

	$page->setTpl("team", array(
		"users"=>$users
	));

});

$app->get("/contact", function(){

	$page = new Page([
		"header"=>false,
	]);

	$page->setTpl("contact");
});

$app->get("/blog", function(){

	$page = new Page([
		"header"=>false,
	]);

	$page->setTpl("blog");
});


?>