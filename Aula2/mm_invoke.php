<?php

	class Usuarios {
		
		public $nome = "Nome usuario";
		public $email = "Email usuario";
		
		public function __invoke($senha){
	
			echo "Nome: {$this->nome} <hr /> Email: {$this->email} <hr /> Senha: $senha";
			
		}
		
	}
	
	$obj = new Usuarios();
	echo $obj("Senha usuario");
	
	
	
	