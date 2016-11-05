<?php

	require ('mysql.php');
	
	//CONEXAO
	$pdo = ConnMySQL::conectar();
	
	$query = "INSERT INTO usuarios (nome, email, senha) VALUES (?,?,?)";
	$stmt = $pdo->prepare($query);
	
	//$stmt->execute(array('Nome Stmt', 'stmt@4linux.com.br', '1234'));
	
	$vars = array('Nome Stmt 2',
				  'Email Stmt 2',
				  'Senha Stmt 2');
	
	$retorno = $stmt->execute($vars);
	
		
	//var_dump($stmt);