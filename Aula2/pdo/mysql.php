<?php

	class ConnMySQL{
		
		//private static $dsn = "mysql:dbname=aulapdo;host=localhost";
		//private static $user = "root";
		//private static $pw = "123456";
		
		private static $conn;
				
		public static function conectar(){
			
			//self::$conn = new PDO(self::$dsn, self::$user, self::$pw);
			
			self::$conn = new PDO('mysql:dbname=aulapdo;host=localhost', 'root', '123456');
			return self::$conn;
			
		}
		
	}
	
	//var_dump(ConnMySQL::conectar());