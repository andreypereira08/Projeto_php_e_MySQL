<!DOCTYPE html>
<html lang="pt-br">
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/style.css">


  
  <title>HOME - ADM</title>
</head>

<body>

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
  // }
      else{
  ?>
  <nav class="navbar navbar-expand-md  fixed-top maine-menu">
    <div class="container">
      <button class="navbar-toggler ml-auto" data-target="#my-nav" onclick="myFunction(this)" data-toggle="collapse"> <span class="bar1"></span> <span class="bar2"></span> <span class="bar3"></span> </button>
      <style>
        #menuestranho{
          color: white;
        }
        #menuestranho:hover{
          color: rgba(255, 255, 255, 0.638);
        }
      </style>
      <div id="my-nav" class="collapse navbar-collapse">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item"><p class="nav-link"><?php echo $_SESSION['email']." | ".$_SESSION['cod_usuario'];?></p></li>
         <li class="nav-item"> <a class="nav-link" id="menuestranho" href="index.php">Home</a> </li>
          <li class="nav-item"> <a class="nav-link" href="playlistadm.php" id="menuestranho" aria-disabled="true">Favoritos</a></li>
          <!-- dropdown menu -->

          <div class="dropdown nav-item">
           <a class="nav-link dropdown-toggle" style="color: white; font-weight: bold; text-transform: uppercase;" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Administração</a>

           <div class="dropdown-menu" style="background-color: #E90E65;" aria-labelledby="dropdownMenuLink">
              <a class="nav-link dropdown-item" style="text-transform: uppercase;" href="contas.php" aria-disabled="true">Contas</a>
              <a class="nav-link dropdown-item" style="text-transform: uppercase;" href="musicas.php" aria-disabled="true">Músicas</a>
              <a class="nav-link dropdown-item" style="text-transform: uppercase;" href="artistas.php" aria-disabled="true">Artistas</a>
           </div>
          </div>
            


          <li class="nav-item"> <a class="nav-link" id="menuestranho" href="sair.php" tabindex="-1" aria-disabled="true">Sair</a></li>
         
        </ul>
      </div>
    </div>
  </nav>

  <div class="container-fluid fh5co-recent-work">

<?php
    $cod_usu_atual = $_SESSION['cod_usuario'];
    $quantidade_musica = 8;
    $direcionamento_playlist = "adicionaraplaylistadm.php";
    include "card_musica.php";

?>
</div>





  </footer>
  <!-- jQuery first, then Popper.js, then Bootstrap JS --> 
  <script src="assets/js/jquery-3.3.1.slim.min.js"></script> 
  <script src="assets/js/popper.min.js" ></script> 
  <script src="assets/js/bootstrap.min.js"></script> 
  <script src="assets/js/owl.carousel.min.js"></script> 
  <script src="assets/js/main.js"></script>
<?php
}
}
?>
</body>

</html>
