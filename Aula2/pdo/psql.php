<?php

	class ConnPSQL{
		
		//private static $dsn = 'pgsql:dbname=aulapdo;host=localhost';
		//private static $user = 'pdo';
		//private static $pw = '123456';
		
		private static $conn;
				
		public static function conectar(){
			
			//self::$conn = new PDO(self::$dsn, self::$user, self::$pw);		
						
			self::$conn =  new PDO('pgsql:dbname=aulapdo;host=localhost', 'pdo', '123456');
			return self::$conn;
			
		}
		
	}
	
	
	
	//var_dump(ConnPSQL::conectar());