<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
    <title>Artistas</title>
    <?php
  session_start();
  if($_SESSION['adm'] == ""){
    header("location: index.html");
    exit;
  }

  else{
  if(!isset($_SESSION['email']) AND !isset($_SESSION['senha']))
  {
    header("location: index.html");
    exit;
  }
        // include "cabecalho.html";

        // include "menu_nav_adm.php";
    ?>
</head>
<body>
      <?php
        include "menu_nav_adm.php";       
      ?>
      
    <div class="container-fluid fh5co-recent-work">
        <div class="container">
          <?php
              // include "menu.php";
              require_once "Banco_de_Dados.php";
              $bd = new Banco_de_Dados;
              // artista
              echo "<h2 name='tab_artista' style='background-color: gray; text-align: center;' class='list-group-item list-group-item-action'>Visualizar Lista de Artistas</h2>";
              $bd -> listaArt();
              $adicionar = "formartistas.php";
              $adicionar2 = "formbuscaartista.php";
              include "cartoes.php";
          ?>
        </div>
    </div>

      <!-- jQuery first, then Popper.js, then Bootstrap JS --> 
  <script src="assets/js/jquery-3.3.1.slim.min.js"></script> 
  <script src="assets/js/popper.min.js" ></script> 
  <script src="assets/js/bootstrap.min.js"></script> 
  <script src="assets/js/owl.carousel.min.js"></script> 
  <script src="assets/js/main.js"></script>
  <?php
  }
  ?>
</body>
</html>