<?php

	namespace Lib;
	use PDO;//importar a classe PDO para a namespace Lib

		class Db{
			
			private $db;

			public function getConn(){
				
				$this->db = new PDO('mysql:dbname=aulapdo;host=localhost','root','123456');
				return $this->db;
			}	


		}
//var_dump(Db::getConn());
