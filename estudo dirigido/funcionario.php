<?php
	class funcionarios
	{
		public $departamento;
		public $salario;
		public $dataEntrada;
		public $CPF;
		public $calculaGanhoAnual;
	

		public function recebeAumento(){
			$this->salario = $this->salario + ($this->salario*0.10);
			echo ('O salario com aumento de'.$this->nome.' é de '.$this->salario);

		}
		function calculaGanhoAnual(){
			$ganhoAnual = $this->salario *12;
			echo ('O ganho anual de'.$this->nome.'é de '.$ganhoAnual);
		}
		function __toString(){
			echo ('O funcionario do departamento'.$this->departamento.' funcionarios deste '.$this->dataEntrada.' possui salario de '.$this->salario);
		}

	}

	$novo = new funcionarios();
	echo '<pre>';
	$novo->departamento = "RH";
	$novo->salario = 1900;
	print_r($novo);
?>