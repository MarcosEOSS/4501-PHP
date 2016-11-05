<?php

	
	class UsuariosView{

	private $mod;
	
	public function __construct(Usuarios $mod){
		$this->mod = $mod;
	}

		public function mostrarDados(){
			echo "Nome do Usuario: {$this->mod->getNome()}";
			echo "Email do Usuario: {$this->mod->getEmail()}";
			echo "Senha do Usuario: {$this->mod->getSenha()}";
		}
	}