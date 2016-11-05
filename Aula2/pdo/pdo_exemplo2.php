<?php

	require ('mysql.php');
	
	//CONEXAO
	$pdo = ConnMySQL::conectar();
	
	$retorno = $pdo->query('SELECT * FROM usuarios;');
	
	echo '<pre>';
	print_r($retorno);
	
	echo "<hr />";
	//$linhaArr = $retorno->fetch(PDO::FETCH_ASSOC); //Retorna resultado em um array associativo
	
	//print_r($linha);
	
	
	//Trabalhando PDO com Retorno de Array Associativo
	while($linhaArr = $retorno->fetch(PDO::FETCH_ASSOC)){
	
		echo "ID: {$linhaArr['id']} <br>";
		echo "Nome: {$linhaArr['nome']} <br>";
		echo "Email: {$linhaArr['email']} <br>";
		echo "Senha: {$linhaArr['senha']} <br>";		
		
		echo "<hr />";
	
	}
	
	//Trabalhando PDO com Retorno de Objeto
	//$linhaObj = $retorno->fetch(PDO::FETCH_OBJ); //Retorna resultado em um objeto

	//echo "ID: {$linhaObj->id} <br>";
	//echo "Nome: {$linhaObj->nome} <br>";
	//echo "Email: {$linhaObj->email} <br>";
	//echo "Senha: {$linhaObj->senha} <br>";
	
	
	
	
	