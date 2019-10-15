<?php

use \Wall\PageAdmin;
use \Wall\Model\User;

$app->get("/admin/posts", function(){
	
	User::verifyLogin();

	$page = new PageAdmin();

	$page->setTpl("posts");
});

$app->get("/admin/new-post", function(){
	
	User::verifyLogin();

	$page = new PageAdmin();

	$page->setTpl("new-post");
});

$app->get("/admin/new-portifolio", function(){
	
	User::verifyLogin();

	$page = new PageAdmin();

	$page->setTpl("new-portifolio");
});

$app->get("/admin/services", function(){
	
	User::verifyLogin();

	$page = new PageAdmin();

	$page->setTpl("services");
});

$app->get("/admin/portifolio", function(){
	
	User::verifyLogin();

	$page = new PageAdmin();

	$page->setTpl("portifolio");
});


?>