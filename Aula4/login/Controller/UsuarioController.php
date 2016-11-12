<?php
	namespace Controller;

	use Model\UsuarioModel;
	use Entity\UsuarioEntity;

	class UsuarioController{
			private $model;
			private $entidade;

			public function __construct(UsuarioModel $model, UsuarioEntity $usuario){
				$this->model = $model;
				$this->entidade = $usuario;
			}



			public function logarUsuario($dados){

				$this->entidade->setLogin($dados["login"]);
				$this->entidade->setSenha($dados["senha"]);
				

				
				$this->model->buscarUsuario($this->entidade);
			}
	}
