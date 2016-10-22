<?php

	class Pai{
		protected static $nome = "Classe Pai";

		public static function getNome(){
			//return self::$nome;
			return static::$nome;

		}
	}

	class Filha extends Pai{
		protected static $nome = "Classe Filha";	
	}

echo Filha::getNome();
echo"<hr />";
echo Pai::getNome();