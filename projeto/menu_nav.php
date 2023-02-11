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
         <li class="nav-item"> <a class="nav-link" id="menuestranho" href="pag_principal.php">Home</a> </li>
          <li class="nav-item"> <a class="nav-link" id="menuestranho" href="playlist.php" tabindex="-1" aria-disabled="true">Favoritos</a></li>
          <li class="nav-item"> <a class="nav-link" id="menuestranho" href="sair.php" tabindex="-1" aria-disabled="true">Sair</a></li>
         
        </ul>
      </div>
    </div>
  </nav>