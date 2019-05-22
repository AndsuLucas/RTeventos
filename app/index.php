<?php
//include das funcoes/classes e outros recursos.
require_once "funcoes/carregarPaginas.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
  <?php require_once "includes/head.html"; ?>
  <body>
    <?php require_once "includes/menu_superior.html"; ?>
    <div class="container-fluid">
      <div class="row">
        <?php require_once "includes/menu_lateral.html"; ?>
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          
          <?php
          //rendenizando paginas. Favor não mexer se não souber oq está fazendo.
          //coloque seus arquivos na pasta (paginas); 
          require_once carregarPagina();
        
          /*
            suponhamos que o nome da sua página seja minhapagina.php.
            Você vai no diretório paginas e copia ela para lá. No diretório "include", no arquivo menu lateral você podera encontrar os respectivos links para as respectivas páginas. Caso você faça parte do grupo encarregado pelos clientes, você irá até este link e colocará no href ->

            href="?pagina=minhapagina" // apenas o nome e não e extensao

            teste.php = ?pagina = teste
            batata.php = ?pagina = batata


          */

          ?>
        
        </main>
      </div>
    </div>
    <?php require_once "includes/scripts.html" ?>
  </body>
</html>