<?php

	require("../Model/UsuariosModel.php");
	require("../View/UsuariosView.php");

	class UsuariosCtrl{

		private $mod;

		public function __construct(){
			$this->mod = new Usuarios("Nome","Email","Senha");
		}

		public function getObj(){
			return $this->mod;
		}
	}

	$ctrl = new UsuariosCtrl();
	$view = new UsuariosView($ctrl->getObj());
	$view->mostrarDados();
	