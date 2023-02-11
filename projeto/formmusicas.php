<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
    <title>Cadastro - Música</title>
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
    ?>
</head>
<body>
    <?php
        include "menu_nav_adm.php";    
    ?>


<div class="container-fluid fh5co-recent-work" style="height: 100vh;">
    <div class="container">
        <form action="CadastroMusica.php" method="POST">
            <fieldset class="col-md-6">
                <legend>Cadastrar Música</legend>
                <div class="form-group">
                    <label for="nome">Nome da Música:</label>
                    <input type="text" class="form-control" id="nome_m" name="nome_mus">
                    </div>
                    <div class="form-group">
                    <label for="genero">Gênero:</label>
                    <input type="text" class="form-control" id="genero_m" name="genero_mus">
                    </div>
        
                    <div class="form-group">
                    <label for="link">Link do Youtube:</label>
                    <input type="text" style="height: 140px;" class="form-control" id="link" name="link">
                    </div>
        
        
                    <?php
                                         echo "<div class='form-group'>";
                                         echo "<label>Artista:</label>";
        
                                         echo "<select name='pesquisa' class='form-control' style='width:300px'>";
        
                                        include("conexao.php");
        
                                        $sql="SELECT nome, cod_artista FROM artista";
                                        $resultado=mysqli_query($conexao, $sql);
                                        if (mysqli_num_rows($resultado) >0){
                                            while($row = mysqli_fetch_array($resultado)){
        
                                        echo "<option value='".$row['cod_artista']."'>".$row['nome']."</option>";
                                        }
                                        }
                                         echo "</select>";
                    ?>
        
        
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