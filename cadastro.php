<!DOCTYPE html>
<html>
<head>
	<title>Hello world!</title>
	<style type="text/css">
		.invalid{
			color: red;
		}
	</style>
</head>
	
	<h1>Cadastro de Aluno</h1>
	<form action="site.php" method="POST">
		Nome:<input type="text" name="nome" required>	
		Idade:<input type="number" name="idade" required>
		Cpf:<input type="number" name="cpf" required>
		Noite:<input type="radio" name="periodo" value="noite" required>
		Tarde:<input type="radio" name="periodo" value="tarde" required>
		Manhã:<input type="radio" name="periodo" value="manha" required>
		<input type="submit" name="enviar">
	</form>

	<?php
	 
	$registro = [
	 	"nome" => null,
	 	"idade" => null,
	 	"cpf" => null,
	 	"período" => null
	 ];
	
	$registro["nome"] = $_POST["nome"];
	$registro["idade"] = $_POST["idade"]; 
	$registro["cpf"] =  (string)$_POST["cpf"];
	$registro["período"] = $_POST["periodo"];
	
	if($registro["nome"] != null){	 
	 	if(strlen($registro["cpf"]) != 11){
	 		echo("<p class=invalid>CPF inválido</p>");
	 	}else{
	 		foreach($registro as $chave => $valor){
	 		echo "$chave: $valor <br/>";
	 		}
	 
			if($registro["idade"]<18){
	 			echo "Aluno menor de idade.";
	 		}else{
	 			echo "Aluno maior de idade";
	 		}
		}
	}else{
		echo "Cadastre algum aluno.";
	}
	
	
	?>

</body>
</html>






