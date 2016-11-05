<?php

	class Contas {
		
		public $saldo = 1000;
		public $titular;
		
		public function setTitular(Usuarios $usuario){
			
			$this->titular = $usuario->nome;
			
		}
	}