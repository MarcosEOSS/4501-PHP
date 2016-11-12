<?php

	$matriz = array(
		"Servidores" => array(
								'user'=>'usuario',
								'host'=>'localhost',
								'password'=> array('senha1'=>'1','senha2'=>'2')
								)

	);

	$matriz['Servidores']['user'] = array('usuario');
	$matriz['Servidores']['host'] = array('localhost');
	$matriz['Servidores']['senha'] = array('senha');

	var_dump($matriz);

	echo $matriz['Servidores']['password']['senha1'];