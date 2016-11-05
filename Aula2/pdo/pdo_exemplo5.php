<?php

	require ('mysql.php');
	
	//CONEXAO
	$pdo = ConnMySQL::conectar();
	
	$query = "INSERT INTO usuarios (nome, email, senha) VALUES (:nome,:email,:senha)";
	$stmt = $pdo->prepare($query);
	
	// Pode mudar a order dos atributos
	$vars = array('email' => 'Email Stmt 3',
				  'senha' => 'Senha Stmt 3',
				  'nome' => 'Nome Stmt 3');	  
	
	$retorno = $stmt->execute($vars);
	
		
	var_dump($retorno);