<?php

	class Usuario{

		public $email;
		public $senha;

		public function verUsuario(){

			echo "e-mail: {$this -> email}<br />";
			echo "senha: {$this -> senha}<br />";
		}

	}

	class Conta{

		public $titular;
		public $saldo;

		public function verUsuario(){

			echo "Titular: {$this -> titular}<br />";
			echo "Saldo: {$this -> saldo}<br />";
		}	
	}


	class CRUD{

		public function cadastrar(Usuario $usuario){
		
			echo "Cadastrando novo usuario... <hr />";
			echo "<pre>";
			var_dump($usuario);
			echo "<hr />";

		}

		public function deletar(Usuario $usuario){
		
			echo "Excluindo usuario... <hr />";
			echo "<pre>";
			var_dump($usuario);
			echo "<hr />";		


		}

		public function atualizar(Usuario $usuario){
		
			echo "Atualizando usuario... <hr />";
			echo "<pre>";
			var_dump($usuario);
			echo "<hr />";

		}

	}

$usuario = new Usuario();
$usuario -> email = "marcos@4linux.com.br";
$usuario -> senha = "0123";

$conta = new Conta();
$conta -> titular = "Titular da conta";
$conta -> senha = "1000";

$crud = new CRUD();
$crud -> cadastrar($usuario);
$crud -> deletar($usuario);
$crud -> atualizar($usuario);
/*$crud -> cadastrar($conta);
$crud -> deletar($conta);
$crud -> atualizar($conta);*/




