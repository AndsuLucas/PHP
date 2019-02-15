<?php
	class Aluno{
		var $registro_matricula;
		var $nome_aluno;
		var $data_nascimento;
		var $comprovante_pessoafisica;

		function __construct($Rm, $Nome, $DataDeNascimento, $Cpf){

			$this->registro_matricula = $Rm;
			$this->nome_aluno =  $Nome;
			$this->data_nascimento = $DataDeNascimento;
			$this->comprovante_pessoafisica = $Cpf;

			echo "Cadastro efetado com sucesso. <br>";


		}



	}
		

		$$_POST["nome"] = new Aluno(
			
			$_POST["rm"],
			$_POST["nome"],
			$_POST["data"],
			$_POST["cpf"]

		);
		foreach($$_POST["nome"] as $chave => $elemento){

			echo "$chave : $elemento <br>";
		}
			echo "utilize '$_POST[nome]'' como login.";


?>