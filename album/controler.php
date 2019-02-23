<?php 
	require "model.php";
	$banco = new Banco("imagens");
	
	if(isset($_POST["upload"])){
		
		$imagem = $_FILES["img"];
		$nomeDaImagem = $_FILES["img"]["name"];
		$nomeTemporarioDaImagem = $_FILES["img"]["tmp_name"];
		$destino = "store/$nomeDaImagem";
		
		move_uploaded_file($nomeTemporarioDaImagem, $destino);

		$banco->guardarNomeDaImagem($nomeDaImagem);


	}
	
		







 ?>