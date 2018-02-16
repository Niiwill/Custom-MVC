<?php

require_once('../app/models/User.php');




class LoginController{



 public function login(){

	require_once('../views/login.php');

 }


 public function register(){

	require_once('../views/register.php');

 }

 public function check($inputs){

 	$user=User::checkUser($inputs);
 	if($user){
	 	Session::add($user->id);
	 	header("Location: /");
 	}else{
 		echo "User ne postoji";
 	}
 	
 }

 public function save($inputs){

 	$user = User::save($inputs);
 	
 	if($user){
 		Session::add($user);
 		header("Location: /");
 	}else{
 		require_once('../views/register.php');
 	}
	

 }


  public function logout(){

  	session_destroy();
	header("Location: /");
 }

}


?>