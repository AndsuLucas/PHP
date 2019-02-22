<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<title>Formulário</title>
	</head>
	<body>
		<form  method="POST" enctype="multipart/form-data">
			<input type="file" name="img"><br><br>
			<input type="submit" name="upload" value="Enviar Imagem">
		</form>
		<?php 
			$arquivo = $_FILES['img'];

			print_r($arquivo);




		 ?>
	</body>
</html>