<?php

	namespace Model;
	
	use Lib\Banco;
	use Entities\EntityUsuario;

	class UsuarioModel{
		
		private $banco;
		public $entidade;
		
		public function __construct(Banco $banco,  EntityUsuario $entidade){
			
			$this->banco = $banco;
			$this->entidade = $entidade;
			
			
		}
		
	}