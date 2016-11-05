<?php

	class Usuarios {
		
		public $nome;
		
		public function __call($metodo, $atributo){
			
			echo "O Metodo $metodo foi chamado, mas ele nao existe";
			
			echo "<pre>";
			print_r($atributo); //$his->nome
			
		}
		
		public static function __callstatic($metodo, $atributo){
			
			echo "Metodo $metodo foi chamado, mas ele nao existe";
			
			echo "<pre>";
			print_r($atributo); //self::$nome
			
		}
	}
	
	$obj = new Usuarios();
	$obj->mostrarNome("Nome do Usuario", "Senha", "email");
	
	Usuarios::mostrarNome("Nome do Usuario", "Senha", "email");
	