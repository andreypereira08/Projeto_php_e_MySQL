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