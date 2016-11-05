<?php

	require ('mysql.php');
	//require ('psql.php');
	
	//CONEXAO
	$pdo = ConnMySQL::conectar();
	//$pdo = ConnPSQL::conectar();
	
	//INSERT
	// EXEC - Metodo do PDO - Execulta e Retorna 0 ou 1
	$exec = $pdo->exec("INSERT INTO usuarios (nome, email, senha) VALUES ('Primeiro cadastro', 'primeiro@4linux.com.br', '1234')");

	var_dump($exec);