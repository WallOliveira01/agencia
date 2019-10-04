<?php

session_start();

require_once("vendor/autoload.php");

use \Slim\Slim;
use \Wall\Page;
use \Wall\PageAdmin;
use \Wall\Model\User;
use \Wall\Model\Category;

$app = new Slim();

$app->config('debug', true);

$app->get('/', function(){

	$page = new Page();

	$page->setTpl("index");
});

$app->get("/sobre", function(){

	$page = new Page([
		"header"=>false,
	]);

	$page->setTpl("sobre");
});

$app->get("/servicos", function(){

	$page = new Page([
		"header"=>false,
	]);

	$page->setTpl("servicos");
});

$app->get("/portfolio", function(){

	$page = new Page([
		"header"=>false,
	]);

	$page->setTpl("portfolio");
});

$app->get("/time", function(){

	$users = User::listAll();

	$page = new Page();

	$page->setTpl("time", array(
		"users"=>$users
	));

});

$app->get("/contato", function(){

	$page = new Page([
		"header"=>false,
	]);

	$page->setTpl("contato");
});

$app->get("/admin", function(){
	
	User::verifyLogin();

	$user = User::getFromSession();
	
	$page = new PageAdmin();

	$page->setTpl("index", array(
		"user"=>$user->getValues()
		
	));
});

$app->get("/admin/login", function(){

	$page = new PageAdmin([
		"header"=>false,
		"footer"=>false
	]);

	$page->setTpl("login");
});

$app->post("/admin/login", function(){

	User::login($_POST["login"], $_POST["password"]);
	header("Location: /admin");
	exit;
});

$app->get("/admin/logout", function(){

	User::logout();
	header("Location: /admin/login");
	exit;
});

$app->get("/admin/users", function(){

	User::verifyLogin();

	$users = User::listAll();

	$page = new PageAdmin();

	$page->setTpl("users", array(
		"users"=>$users
	));

});

$app->get("/admin/users/create", function(){

	User::verifyLogin();

	$page = new PageAdmin();

	$page->setTpl("users-create");


});

$app->get("/admin/users/:iduser/delete", function($iduser) {

	User::verifyLogin();	

	$user = new User();

	$user->get((int)$iduser);

	$user->delete();

	header("Location: /admin/users");
	exit;

});

$app->get("/admin/users/:iduser", function($iduser){

	User::verifyLogin();

	$user = new User();

	$user->get((int)$iduser);

	$page = new PageAdmin();

	$page->setTpl("users-update", 
	array(
		"user"=>$user->getValues()
	));

});

$app->post("/admin/users/create", function () {
 
 User::verifyLogin();
 
 $user = new User();
 
 $_POST["inadmin"] = (isset($_POST["inadmin"])) ? 1 : 0;
 
 $_POST['despassword'] = password_hash($_POST["despassword"], PASSWORD_DEFAULT, [
 
 "cost"=>12
 
 ]);
 
 $user->setData($_POST);
 
 $user->save();
 
 header("Location: /admin/users");
 
 exit;
 
});

$app->post("/admin/users/:iduser", function($iduser){

	User::verifyLogin();

	$user = new User();

	$_POST["inadmin"] = (isset($_POST["inadmin"]))?:0;

	$user->get((int)$iduser);

	$user->setData($_POST);

	$user->update();

	header("Location: /admin/users");
	exit;

});

$app->get("/admin/forgot", function(){
	$page = new PageAdmin([
		"header"=>false,
		"footer"=>false
	]);

	$page->setTpl("forgot");
});

$app->post("/admin/forgot", function(){
	
	$user = User::getForgot($_POST["email"]);

	header("Location: /admin/forgot/sent");
	exit;

});

$app->get("/admin/forgot/sent", function(){
	
	$page = new PageAdmin([
		"header"=>false,
		"footer"=>false
	]);

	$page->setTpl("forgot-sent");

});

$app->get("/admin/categories", function(){

	User::verifyLogin();

	$categories = Category::listAll();

	$page = new PageAdmin();

	$page->setTpl("categories", [
		'categories'=>$categories
	]);
});

$app->get("/admin/categories/create", function(){

	User::verifyLogin();

	$page = new PageAdmin();

	$page->setTpl("categories-create");
});

$app->post("/admin/categories/create", function(){

	User::verifyLogin();

	$category = new Category();

	$category->setData($_POST);

	$category->save();

	header('Location: /admin/categories');
	exit;
});


$app->get("/admin/categories/:idcategory/delete", function($idcategory){

	User::verifyLogin();
	
	$category = new Category();

	$category->get((int)$idcategory);

	$category->delete();

	header('Location: /admin/categories');
	exit;
});

$app->get("/admin/categories/:idcategory", function($idcategory){

	User::verifyLogin();
	
	$category = new Category();

	$category->get((int)$idcategory);
	
	$page = new PageAdmin();

	$page->setTpl("categories-update", [
		'category'=>$category->getValues()
	]);

});

$app->post("/admin/categories/:idcategory", function($idcategory){

	User::verifyLogin();

	$category = new Category();

	$category->get((int)$idcategory);

	$category->setData($_POST);

	$category->save();

	header('Location: /admin/categories');
	exit;

});

$app->get("/admin/posts", function(){
	
	User::verifyLogin();

	$page = new PageAdmin();

	$page->setTpl("posts");
});

$app->get("/admin/novo-post", function(){
	
	User::verifyLogin();

	$page = new PageAdmin();

	$page->setTpl("novo-post");
});

$app->get("/admin/servicos", function(){
	
	User::verifyLogin();

	$page = new PageAdmin();

	$page->setTpl("servicos");
});

$app->run();

?>