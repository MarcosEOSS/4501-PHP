<?php

	class Model{
		
		public $msg;

		public function __construct(){
			$this->msg = "Hello World!!";
		}

	}

	class View{
		private $model;
		private $controller;

		public function __construct(Model $model, Controller $controller){
			$this->model = $model;
			$this->controller = $controller;
		}

		public function mostrarMsg(){
			//echo $this->model->msg;
			//return $this->controller->buscarMsg();
			return '<a href="mvc.php?action=mudarMsg">'.$this->model->msg.'</a>
			<br /><a href="mvc.php?action=mudarMsg2">'.$this->model->msg.'</a>';
		}

	}

	class Controller{
		private $model;

		public function __construct(Model $model){
			$this->model = $model;
		}

		/*public function buscarMsg(){
		//	return $this->model->msg;
		}*/
		public function mudarMsg(){
			$this->model->msg = "Link Clicado";
		}

		public function mudarMsg2(){
			$this->model->msg = "Link 2 Clicado";
		}


	}


$model = new Model();
$controller = new Controller($model);
$view = new View($model, $controller);

if(isset($_GET['action'])){
	$controller->$_GET['action']();
}

echo $view->mostrarMsg();


