<?php

	require ('mysql.php');
	
	//CONEXAO
	$pdo = ConnMySQL::conectar();
	
	$query = "SELECT * FROM usuarios WHERE id = :id";
	$stmt = $pdo->prepare($query);
	
	$stmt->bindValue(":id",10); //Pega o valor da variavel direto
	
	//BIND PARAM
	//$stmt->bindParam(":nome", $nome); // Usa a variavel como parametro para pegar o valor
	
	$retorno = $stmt->execute();
	
	echo $count = "Qtd Resultado da Consulta: " . $stmt->rowCount() . "<hr \>";
	
	$linha = $stmt->fetch(PDO::FETCH_ASSOC);
	
	echo "<pre>";
	print_r($linha);