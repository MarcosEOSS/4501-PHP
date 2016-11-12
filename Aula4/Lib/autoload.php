<?php

	function autoload($classe){
		
		//echo $classe ."<br />";
		
		
		
		//$arq = $classe . ".php";
		$arq = str_replace('\\','/',$classe). '.php';

		
		if(file_exists($arq)){
			
			require($arq);
			
		}else{
			
			echo "Essa classe nao existe";
			
		}
		
		
		
	}
	
	spl_autoload_register('autoload');
	
	