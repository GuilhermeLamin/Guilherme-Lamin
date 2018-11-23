<?php
//require __DIR__."funcionario.php;

	include(funcionario.php);

	$train = new funcionario();
	$train->nome = "train";
	$train->departamento = "RH";
	$train->salario = 1000.5;
	$train->dataEntrada = "30/07/2001"
	$train->CPF = "104.099.111-09";

	echo '<pre>';

	$train->recebeAumento();
	$train->CalculaGanhoAnual();
	$train-> __toString();

	$lamin = funcionario();
	$lamin->nome = "lamin";
	$lamin-> = "RH"
	$lamin->salario = 988.5;
	$lamin->dataEntrada = "01/08/2001";
	$lamin->CPF = '080.900.999-06';

	echo '<pre>';

	$lamin->recebeAumento();
	$lamin->CalculaGanhoAnual();
	$lamin->__toString();

?>