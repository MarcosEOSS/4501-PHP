<?php

	class Usuarios {
		
		public $nome = "Nome usuario";
		public $email = "Email usuario";
		
		public function __clone(){
	
			echo "Objeto Clonado <hr />";
			
		}
		
	}
	
	echo "<pre>";
	
	$obj1 = new Usuarios();
	$obj1->nome = "Usuario 1";
	$obj1->email = "Email 1";
	
	$obj2 = clone $obj1;
	$obj2->nome = "Usuario 2";
	$obj2->email = "Email 2";
	
	
	print_r($obj1);
	print_r($obj2);
	
	
	
	