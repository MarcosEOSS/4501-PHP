<?php

require("model.php");
require("view.php");
require("controller.php");


$model = new Model();
$controller = new Controller($model);
$view = new View($model, $controller);

//if(isset($_GET['action']) AND $_GET['id']){
if(isset($_GET['action']) AND $_GET['action']=="atualizar"){
	echo $controller->{$_GET['action']}($_POST,$_GET['id']);
}
//elseif(isset($_GET['action'])){
if(isset($_GET['action']) AND $_GET['action']=="cadastrar"){
	echo $controller->{$_GET['action']}($_POST);
}


if(isset($_GET['id'])){
	echo $view->montarForm($_GET['id']);
}
else{
	//echo $view->montarForm();
	echo $view->listarUsuarios();
}


//echo $view->mostrarMsg();
