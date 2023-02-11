<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
    <title>Configuração - Artista</title>
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
    //  include "cabecalho.html";
    ?>
</head>
<body>
      <?php
        include "menu_nav_adm.php";       
      ?>
  
		<div class="container-fluid fh5co-recent-work" style="height: 100vh;">
		<div class="container">
			<h1>Confinguração | Artista</h1>
									<?php
			
									 echo "<form action='paginaalteraArtista.php' method='POST'>";
			
									 echo "<div class='form-group'>";
									 echo "<label>Pesquisar artista cadastrado:</label>";
			
									 echo "<select name='pesquisa' class='form-control' style='width:300px'>";
			
									include("conexao.php");
			
									$sql="SELECT nome, cod_artista FROM artista";
									$resultado=mysqli_query($conexao, $sql);
									if (mysqli_num_rows($resultado) >0){
										while($row = mysqli_fetch_array($resultado)){
											// echo $row['nome'];
									echo "<option value='".$row['cod_artista']."'>".$row['nome']."</option>";
									}
									}
									 echo "</select>";
								?>
						  <br>
						  O que deseja fazer com o artista selecionado?
						  <br>
									<input type='radio' name='acao' id='at' value='alterar'>
									<label for='alterar'>Alterar</label>  
							  <br>
									<input type='radio' name='acao' id='at' value='excluir'>
									<label for='alterar'>Excluir</label>
							  <br>
									<input type='radio' name='acao' id='at' value='listar'>
									<label for='alterar'>Listar dados</label>
							  <br>
							  <br>
							  <button type='submit' class='btn btn-success'> <span class='glyphicon glyphicon-thumbs-up'></span>Avançar</button>
				
									<a href="index.php" class="btn btn-primary">Página inicial</a>
			
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