<?php


class DB extends MySQLi{

	private static $instance=null;

	private $servername="127.0.0.1";
	private $username='root';
	private $password="";
	private $dbname='diwanee';
	
	private function __construct(){
         parent::__construct($this->servername,$this->username,$this->password,$this->dbname);
     
	}

	public static function getInstance(){

		if(self::$instance == null){
			self::$instance= new DB();
		}
		return self::$instance;
	}

}





?>