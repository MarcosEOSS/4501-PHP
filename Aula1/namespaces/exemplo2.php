<?php

require("bradesco.php");
require("caixa.php");

$bradesco = new Bradesco\Conta();
	echo "Banco: {$bradesco->getBanco()} <hr />";

use Caixa\Conta as ContaCaixa;
$caixa = new ContaCaixa();
echo "Banco: {$caixa->getBanco()} <hr />";
