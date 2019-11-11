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

$app->get("/admin/team", function(){
	
	User::verifyLogin();

	$page = new PageAdmin();

	$page->setTpl("team", array(
		"team"=>$team
	));
});


$app->get("/admin/team/:idemember", function($idmember){
	
	User::verifyLogin();

	$page = new PageAdmin();

	$page->setTpl("team-update");
});

$app->get("/admin/team/create", function(){
	
	User::verifyLogin();

	$page = new PageAdmin();

	$page->setTpl("team-create");
});

$app->get("/admin/team/:idemember/delete", function($idmember){
	
	User::verifyLogin();

});

$app->post("/admin/team/create", function(){
	
	User::verifyLogin();

	$page = new PageAdmin();

	$page->setTpl("team-create");
});

$app->post("/admin/team/:idemember", function($idmember){
	
	User::verifyLogin();

	$page = new PageAdmin();

	$page->setTpl("team-update");
});


$app->get("/admin/profile", function(){

	User::verifyLogin();

	$users = User::listAll();

	$page = new PageAdmin();

	$page->setTpl("profile", array(
		"users"=>$users
	));

});


?>