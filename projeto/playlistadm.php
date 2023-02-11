<!DOCTYPE html>
<!--
  Girly by FreeHTML5.co
  Twitter: https://twitter.com/fh5co
  Facebook: https://fb.com/fh5co
  URL: https://freehtml5.co
-->
<?php
  // include "valida_cookie.php";
?>
<html lang="pt-br">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <title>FAVORITOS - ADM</title>
</head>

<body>
  <?php
  session_start();

  if(!isset($_SESSION['email']) AND !isset($_SESSION['senha']))
  {
    header("location: index.html");
    exit;
  }

//   echo $_SESSION['email'];
  // include "tema_esc_cla/index.html";

  // sem verificacao de adm
  include "menu_nav_adm.php";
  ?>

  <div class="container-fluid fh5co-recent-work">

      <?php
          $cod_usu_atual = $_SESSION['cod_usuario'];
          $direcionamento_playlist2 = "retirardaplaylistadm.php";
          include "card_playlist.php";
      ?>
  </div>
 
  
  </footer>

  <!-- jQuery first, then Popper.js, then Bootstrap JS --> 
  <script src="assets/js/jquery-3.3.1.slim.min.js"></script> 
  <script src="assets/js/popper.min.js" ></script> 
  <script src="assets/js/bootstrap.min.js"></script> 
  <script src="assets/js/owl.carousel.min.js"></script> 
  <script src="assets/js/main.js"></script>

</body>
</html>