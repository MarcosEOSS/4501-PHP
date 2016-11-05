<?php
	
	//namespace mvc\Model;

	require("../db/db.php");
	

	class Usuarios{

		private $id;
		private $nome;
		private $email;
		private $senha;

		private $db;

		public function __construct($nome=null,$email=null,$senha=null,$id=null){
			$this->db = Conn::conectar();
			//$this->nome = $nome;
			//$this->email = $email;
			//$this->senha = $senha;
			//$this->id = $id;

		}

		public function getId(){
			return $this->id;
		}

		public function setId($valor){
			$this->id = $valor;
		}

		public function getNome(){
			return $this->nome;
		}

		public function setNome($valor){
			$this->nome = $valor;
		}

		public function getEmail(){
			return $this->email;
		}

		public function setEmail($valor){
			$this->email = $valor;
		}

		public function getSenha(){
			return $this->senha;
		}

		public function setSenha($valor){
			$this->senha = $valor;
		}
	}

	//$mod = new Usuarios();
	//var_dump ($mod);
	//$mod->setNome('Nome');
	//var_dump($mod);
	//$mod->setEmail('Mail@Nome');
	//var_dump($mod);
