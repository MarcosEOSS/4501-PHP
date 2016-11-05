<?php

require ("entity.php");


class Controller{
		private $model;
		private $entidade;

		public function __construct(Model $model){
			$this->model = $model;
			$this->entidade = new Usuarios();
		}

		/*public function mudarMsg(){
			$this->model->msg = "Link Clicado";
		}

		public function mudarMsg2(){
			$this->model->msg = "Link 2 Clicado";
		}*/

		public function cadastrar($dados){
			
			$this->entidade->setNome($dados["nome"]);
			$this->entidade->setEmail($dados["email"]);
			$this->entidade->setSenha($dados["senha"]);

			return $this->model->salvar($this->entidade);
			//print_r($dados);
		}


		public function atualizar($dados,$id){

			$this->entidade->setId($id);
			$this->entidade->setNome($dados["nome"]);
			$this->entidade->setEmail($dados["email"]);
			$this->entidade->setSenha($dados["senha"]);

			return $this->model->editar($this->entidade);
			//print_r($dados);
		}

	}
