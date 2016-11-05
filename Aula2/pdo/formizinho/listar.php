<?php

	require_once '../mysql.php';
	$pdo = ConnMYSQL::conectar();
	
	$query  = "SELECT * FROM usuarios;";
	
	$stmt = $pdo->prepare($query);
	
	$stmt->execute();
	
	echo "Usuario Cadastrados: {$stmt->rowCount()} <hr \>";
	
	$registros = $stmt->fetchAll(PDO::FETCH_ASSOC);
	
	foreach ($registros as $registro){
		
		
		echo "<i>ID:</i> {$registro['id']} <br>";
		echo "<i>Nome:</i> {$registro['nome']} <br>";
		echo "<i>Email</i> {$registro['email']} <br>";
		echo "<i>Senha:</i> {$registro['senha']} <br>";	
		echo "<a href='atualizar.php?id={$registro['id']}'>Editar</a>  ";
		echo "<a href='deletar.php?id={$registro['id']}'>Excluir</a>";
		echo "<hr \>";
	}

	
