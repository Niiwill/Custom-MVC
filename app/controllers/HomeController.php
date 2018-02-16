<?php

require_once('../app/models/User.php');

class HomeController{

	// Index controller 
	public function index(){
 	
		require_once('../views/index.php');

 	}
 	// Dashboard controller
 	public function dashboard(){

 		$user_id=$_SESSION['user_id'];
 		$user=User::get($user_id);
		require_once('../views/dashboard.php');

 	}
 	// All users controller
  	public function listUsers(){

 		$users=User::getAll();
		require_once('../views/list-users.php');

 	}
}

?>