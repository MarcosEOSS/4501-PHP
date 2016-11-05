<?php

	require ('mysql.php');
	
	//CONEXAO
	$pdo = ConnMySQL::conectar();
	
	$query = "INSERT INTO usuarios (nome, email, senha) VALUES (:nome,:email,:senha)";
	$stmt = $pdo->prepare($query);
	
	//BIND VALUE
	$nome = 'Nome Stmt 5';
	//$email = 'stmt5@4linux.com.br';
	$senha = '789';
	
	$stmt->bindValue(":nome",$nome); //Pega o valor da variavel direto
	$stmt->bindValue(":email",'stmt6@4linux.com.br'); // Outra forma de atribuir
	$stmt->bindValue(":senha",$senha);
	
	//BIND PARAM
	//$stmt->bindParam(":nome", $nome); // Usa a variavel como parametro para pegar o valor
	
	$retorno = $stmt->execute();
	
		
	var_dump($retorno);