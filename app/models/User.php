<?php


class User {

	

	public static function getAll(){
	
		$db=DB::getInstance();
		$result=$db->query('SELECT * FROM users ORDER BY id DESC');

		while ($row = $result->fetch_object()) {
			$users[] = $row;
   		}

   		return $users;
	}

	public static function get($id){
	
		$db=DB::getInstance();
		$result=$db->query('SELECT * FROM users WHERE id='.$id.'');

		if ($result->num_rows > 0){

			return $result=$result->fetch_object();
			
		}else{
			return false;
		}
	}

	public static function save($inputs){

		$email=$inputs['email'];
		$password=md5($inputs['password']);

		$db=DB::getInstance();
		$db->query(
			"INSERT INTO `users`(`email`, `password`) VALUES ('".$email."', '".$password."')"
			);

		
		if (mysqli_connect_errno()){
			return false;
		}else{
			return $db->insert_id;
		}


	}

	public static function checkUser($inputs){

		$email=$inputs['email'];
		$password=md5($inputs['password']);

		$db=DB::getInstance("127.0.0.1","root","","diwanee");
		$result=$db->query(
			"SELECT * FROM `users` WHERE email = '".$email."' AND password= '".$password."' LIMIT 1"
			);

		if ($result->num_rows > 0){

			return $result=$result->fetch_object();
			
		}else{
			return false;
		}
	}





}


?>