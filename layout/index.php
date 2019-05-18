<?php
//include das funcoes/classes e outros recursos.
require_once "funcoes/carregarPaginas.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
  <?php require_once "includes/head.html"; ?>
  <body>
    <?php require_once "includes/navbar_superior.html"; ?>
    <div class="container-fluid">
      <div class="row">
        <?php require_once "includes/navbar_lateral.html"; ?>
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          
          <?php
          //rendenizando paginas. Favor não mexer se não souber oq está fazendo.
          
          //retornando um array contendo url =>  arquivos.php
          $caminhos = require "urls.php";
          


          require_once carregarUrl(pegarUrl(), $caminhos);
          
          ?>
        
        </main>
      </div>
    </div>
    <?php require_once "includes/scripts.html" ?>
  </body>
</html>