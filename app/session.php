<?php

class Session{

	// Is User Logged
	public static function isLogin(){

		if (isset($_SESSION['user_id'])){
			return true;
		}else{
			return false;
		}
	}

	// Add session for authenticaton
	public static function add($user){
		$_SESSION["user_id"] = $user;
		return true;
	}

}

?>