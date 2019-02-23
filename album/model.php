<?php 
	class Banco{
		
		var $host = 'localhost';
		var $usuario = 'root';
		var $senha   = 'password';
 		var $banco;
 		var $conexao;
 		
 		function __construct($Banco){
 			$this->banco = $Banco;
 			
 			$this->conexao = 
 				mysqli_connect(				
 				$this->host,
 				$this->usuario,
 				$this->senha,
 				$this->banco
 			);

		}
		
		function criarTabela($Nome){
			$sql = "
				CREATE TABLE IF NOT EXISTS $Nome(
				id INTEGER AUTO_INCREMENT,
				nome_imagem VARCHAR(50) NOT NULL,
				PRIMARY KEY (id)
				);
			";

			mysqli_query($this->conexao,$sql);

			mysqli_close($this->conexao);

		}
		function guardarNomeDaImagem($Nome){
			$sql = "
				INSERT INTO imagem
				SET nome_imagem = '$Nome'
	
			";
			mysqli_query($this->conexao, $sql);
			mysqli_close($this->conexao);
		}
		function retornarImagens(){
			$sql = "SELECT * FROM imagem";

			return mysqli_query($this->conexao, $sql);
			mysqli_close();


		}

	}	



?>