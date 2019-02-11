<?php
	include_once(__dir__ . "/Db.php");
	class User{
		private $db;
		public function __construct(){
			$this->db = new Db();
		}
		public static function checkLogined(){
			
		}
		public function login($username, $password){
			$pwd = hash('sha256', $password);
			$result = $db->selectQuery("user_id","user","user_name == '$username' && password == '$pwd'");
			if($result != null){
				
			}
		}
	}
?>