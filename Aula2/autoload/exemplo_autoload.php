<?php

	//include 'Contas.php';
	//include 'usuarios.php';
	
	function __autoload($class){
		
		include ("$class.php");
		
	}

	$conta = new Contas();
	$usuario = new Usuarios();
	
	$conta = new Contas();
	$usuario = new Usuarios();
	
	$usuario->nome = "Titular da Conta";
	$conta->setTitular($usuario);
	
	echo "Saldo: {$conta->saldo} <hr />";
	echo "Titular: {$conta->titular}";