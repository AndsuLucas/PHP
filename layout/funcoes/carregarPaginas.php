<?php 
//retorna a url com base na requisição do usuario
//retorna apenas o CAMINHO DA URL
function pegarUrl () {

	$url = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);

	return $url;

}

//Verifica se existe algum arquivo atrlado a url
function carregarUrl ($url,$caminhos) {

	if(array_key_exists($url, $caminhos)){
	
		return $caminhos[$url];

	}else{
		
		header("location: /");
	}

}




?>
