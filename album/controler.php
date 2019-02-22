<?php 
	require "model.php";
	$banco = new Banco("imagens");

	if(isset($_POST["upload"])){
		$imagem = $_FILES["imagem"];
		$nomeDaImagem = $_FILES["imagem"]["name"];
		$nomeTemporarioDaImagem = $_FILES["imagem"]["tmp_name"];
		print_r("$nomeDaImagem <br>");
		print_r("$nomeTemporarioDaImagem <br>");
	}

		







 ?>