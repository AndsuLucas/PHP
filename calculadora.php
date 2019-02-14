<form method="POST" action="calculadora.php">
	numero1:<input type="number" step="0.00001" name="num1">
	<br>
	numero2:<input type="number" step="0.00001" name="num2">
	<br>
	operador:<input type="text" name="op">
	<br>
	<input type="submit">
</form>
<?php
	$numero1 = $_POST["num1"];
	$numero2 = $_POST["num2"];
	$operador = $_POST["op"];

	if($operador == "+"){
		echo $numero1 + $numero2;
	}elseif($operador == "-"){
		echo  $numero1 - $numero2;
	}elseif($operador == "*"){
		echo  $numero1 * $numero2;
	}elseif($operador == "/"){
		echo  $numero1 / $numero2;
	}else{
		echo "operador inválido";
	}
				
	


?>