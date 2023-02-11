<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
    <title>Cadastro - Artistas</title>
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
        include "menu_nav_adm.php";       
    ?>
    

<div class="container-fluid fh5co-recent-work" style="height: 100vh;">
    <div class="container">
        <form action="CadastroArtista.php" method="POST">
            <fieldset class="col-md-6">
                <legend>Cadastrar Artista</legend>
                <div class="form-group">
                    <label for="nome">Nome do Artista</label>
                    <input type="text" class="form-control" id="nome" name="nome">
                    </div>
                    <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email">
                    </div>
                    <div class="form-group">
                    <label for="data_nasc">Data de Nascimento</label>
                    <input type="date" class="form-control" id="data_nasc" name="data_de_nasc">
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