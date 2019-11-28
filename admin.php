<?php

use \Wall\PageAdmin;
use \Wall\Model\Category;
use \Wall\Model\User;

$app->get("/admin/posts", function(){
	
	User::verifyLogin();

	$page = new PageAdmin();

	$page->setTpl("posts");
});

$app->get("/admin/new-post", function(){
	
	User::verifyLogin();

	$categories = Category::listAll();

	$page = new PageAdmin();

	$page->setTpl("new-post", [
		'categories'=>$categories
	]);
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

	$user = User::getFromSession();

	$page = new PageAdmin();

	$page->setTpl("profile", [
		'user'=>$user->getValues(),
		'profileMsg'=>User::getSuccess(),
		'profileError'=>User::getError()
	]);

});

$app->post("/admin/profile", function(){

	User::verifyLogin();

	if(!isset($_POST['desperson']) || $_POST['desperson'] === '')
	{
		User::setError("Preencha o seu nome.");
		header('Location: /admin/profile');
		exit;
	}

	if(!isset($_POST['desemail']) || $_POST['desemail'] === '')
	{
		User::setError("Preencha o seu email.");
		header('Location: /admin/profile');
		exit;
	}

	$user = User::getFromSession();
	
	if ($_POST['desemail'] !== $user->getdesemail())
	{
		if(User::checkLoginExists($_POST['desemail']) === true)
		{
			User::setError("Email já cadastrado");
			header('Location: /admin/profile');
			exit;
		}
	}

	$_POST['inadmin'] = $user->getinadmin();
	$_POST['despassword'] = $user->getdespassword();
	

	$user->setData($_POST);

	$user->update();

	User::setSuccess("Dados alterados com sucesso!");

	header('Location: /admin/profile');
	exit;

});

$app->get('')


?>