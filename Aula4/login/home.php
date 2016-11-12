<?php

	require ('Lib/autoload.php');

	use Lib\Db;
	use Entity\UsuarioEntity;
	use Model\UsuarioModel;
	use Controller\UsuarioController;
	use View\UsuarioView;

	$db = new Db();
	$entidade = new UsuarioEntity();
	$model = new UsuarioModel($db);
	$controller = new UsuarioController($model, $entidade);
	$view = new UsuarioView($model, $controller);

	if(!empty($_POST['login']) && !empty($_POST['senha'])){
		$view->controller->logarUsuario($_POST);
	}else{
		header('Location: index.php');

	}

	//print_r($_POST);

