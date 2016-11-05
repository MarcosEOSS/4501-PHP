<?php

	class Usuarios {
		
		public $nome = "Nome usuario";
		public $email = "Email usuario";
		
		public function __toString(){
	
			return "Nome: {$this->nome} <hr /> Email: {$this->email}";
			
		}
		
	}
	
	$obj = new Usuarios();
	echo $obj;
	
	
	
	