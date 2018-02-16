<?php
session_start();
require_once('../database/database.php'); 
require_once('router/router.php'); 
require_once('session.php'); 

$url=isset($_GET['url']) ? $_GET['url'] : ' ';


// if user is authenticated
if(Session::isLogin()){

	if($url == 'logout'){

		// register route
		$router->get('LoginController','logout');

	}elseif($url == 'list-users'){

		// all user list route
		$router->get('HomeController','listUsers');

	}else{
		// dashboard route
		$router->get('HomeController','dashboard');
	}
	
}else{
	
	if($url == 'register'){

		// register route
		$router->get('LoginController','register');

	}elseif($url == 'save'){

		// save route
		$router->get('LoginController','save');

	}elseif($url == 'login'){

		// login route
		$router->get('LoginController','login');

	}elseif($url == ' '){

		// index route
		$router->get('HomeController','index');

	}elseif($url == 'login/check'){

		// login check
		$router->get('LoginController','check');

	}else{
		echo "Page doesn't exist";

	}
	
}


?>