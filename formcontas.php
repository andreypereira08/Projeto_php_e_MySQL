<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
    <title>Cadastro - Contas</title>
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
    ?>
</head>
<body>
    <?php
        // include "menu.php";    
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

          <li class="nav-item"> <a class="nav-link" id="menuestranho" href="playlistadm.php" aria-disabled="true">Favoritos</a></li>
          
          <!-- dropdown menu -->
          <div class="dropdown nav-item">
           <a class="nav-link dropdown-toggle" style="color: white; font-weight: bold; text-transform: uppercase;" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Administração</a>

           <div class="dropdown-menu" style="background-color: #E90E65;" aria-labelledby="dropdownMenuLink">
              <a class="nav-link dropdown-item" style="text-transform: uppercase;" href="contas.php" aria-disabled="true">Contas</a>
              <a class="nav-link dropdown-item" style="text-transform: uppercase;" href="musicas.php" aria-disabled="true">Músicas</a>
              <a class="nav-link dropdown-item" style="text-transform: uppercase;" href="artistas.php" aria-disabled="true">Artistas</a>

           </div>
          </div>
          <!-- Fim Dropdown menu -->
          
          <li class="nav-item"> <a class="nav-link" id="menuestranho" href="sair.php" tabindex="-1" aria-disabled="true">Sair</a></li>
        </ul>
      </div>
    </div>
  </nav>

<div class="container-fluid fh5co-recent-work" style="height: 100vh;">
    <div class="container">
        <form action="CadastroConta.php" method="POST">
            <fieldset class="col-md-6">
                <legend>Cadastrar Conta</legend>
                <div class="form-group">
                    <label for="nome">Nome completo</label>
                    <input type="text" class="form-control" id="nome" name="nome">
                    </div>
                    <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email">
                    </div>
                    <div class="form-group">
                    <label for="senha">Senha</label>
                    <input type="text" class="form-control" id="senha" name="senha">
                    </div>
                    <div class="form-group">
                    <label for="data_nasc">Data de Nascimento</label>
                    <input type="date" class="form-control" id="data_nasc" name="data_de_nasc">
                    </div>
                    <br>
                    <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="adm" value="sim" id="flexCheckChecked">
                        <label class="form-check-label" for="flexCheckChecked">
                            Conta de Administrador
                        </label>
                    </div>
        
                    <br>
                    <button type="submit" class="btn btn-primary">Confirmar cadastro</button>
            </fieldset>
        
        
        </form>
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