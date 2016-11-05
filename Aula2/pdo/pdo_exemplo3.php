<?php

	require ('mysql.php');
	
	//CONEXAO
	$pdo = ConnMySQL::conectar();
	
	$retorno = $pdo->query('SELECT * FROM usuarios;');
	
	echo '<pre>';
	print_r($retorno);
	echo "<hr />";

	$linhas = $retorno->fetchAll(PDO::FETCH_OBJ);
	
	
	echo "Total de Linhas: ". $retorno->rowCount() . "<hr \>";
	
	//print_r($linhas);

	foreach($linhas as $linha){	
		
		echo "ID: {$linha->id} <br>";
		echo "Nome: {$linha->nome} <br>";
		echo "Email: {$linha->email} <br>";
		echo "Senha: {$linha->senha} <br>";
		
		echo "<hr />";
		
	}	
	
	//FETCH ASSOC
	/*
	$linhas = $retorno->fetchAll(PDO::FETCH_ASSOC);

	//print_r($linhas);
	
	echo "ID: {$linhas[0]['id']} <br>";
	echo "Nome: {$linhas[0]['nome']} <br>";
	echo "Email: {$linhas[0]['email']} <br>";
	echo "Senha: {$linhas[0]->['senha']} <br>";
	*/
	
	