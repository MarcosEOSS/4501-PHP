<?php

	class Usuario{
		public static $tipoUsuario = "Administrativo";
		private $nome;
		private $email;

		public function setNome($valor){
			$this->nome = $valor;
		}

		public function setEmail($valor){
			$this->email = $valor;
		}

		public function getNome(){
			return $this->nome;
		}

		public function getEmail(){
			return $this->email;
		}

		public static function getTipoUsuario(){
			return self::$tipoUsuario;
		}

	}

	$obj = new Usuario();
	$obj ->setNome("Marcos Eduardo");
	$obj ->setEmail("marcos@gmail.com");

	echo "Nome: {$obj->getNome()}";
	echo "<hr />";
	echo "Email: {$obj->getEmail()}";
	echo "<hr />";
	echo "Tipo do Usuario: " . Usuario::getTipoUsuario();
	//nao ha necessidade de instanciar esta funcao no objeto,
	//basta chamalo diretamente atraves da sua classe.

