<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<title>Formulário</title>
	</head>
	<body>
		<form action="controler.php" method="POST" enctype="multipart/form-data">
			<input type="file" name="img"><br><br>
			<input type="submit" name="upload" value="Enviar Imagem">
		</form>
		<form method="GET">
			<button type="input" name="mostrar_imagens">Mostrar imagens</button>
		</form>
		<?php
		require "controler.php";
		echo "
			<form method=GET>
			<select>		
		";
		
		if(isset($_GET["mostrar_imagens"])){
			$imagens =  $banco->retornarImagens();

			foreach ($imagens as $value){
				echo "<option>$value[nome_imagem]</option>";
			}


		}
		echo "
			</select>
			</form>
		";

		?>



		
	</body>
</html>