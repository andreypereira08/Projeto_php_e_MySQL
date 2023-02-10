<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <?php
  session_start();
  
if(!isset($_SESSION['email']) AND !isset($_SESSION['senha']))
{
  header("location: index.html");
  exit;
}
    if($_POST['acao'] == ""){
        header("location: formbuscamusica.php");
    }
    else{
        $codigo = $_POST['pesquisa'];
        $acao = $_POST['acao'];

        if($acao == "alterar")
        {
            echo "<title>Altera - Cadastro da Música</title>";
        }

        else if($acao == "excluir")
        {
            echo "<title>Excluir - Cadastro da Música</title>";
        }

        else
        {
            echo "<title>Visualizar - Lista das Músicas</title>";
        }
        ?>
    <title>Altera cadastro do usuário</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
    <div class="container">

<?php
        
        if($acao == "alterar")
        {
            ?>
            <div class="card card-register mx-auto col-8 px-0">
            <div class="card-header bg-primary">Edite o(s) campo(s) desejados</div>
            <div class="card-body">
                <form action="alteramusica.php" method="POST">
                    <div class="form-group">
                        <div class="form-row">
        <?php
            include("conexao.php");
            
            $sql="SELECT * FROM musica WHERE cod_mus = ". $codigo ." LIMIT 5";
            $resultado_musica=mysqli_query($conexao, $sql);
            while($rows_musica=mysqli_fetch_array($resultado_musica))
            {
            $nome_mus = $rows_musica['nome_mus'];
            $genero_mus = $rows_musica['genero_mus'];
            $link = $rows_musica['link'];
            $cod_artista = $rows_musica['cod_artista'];
            $cod_mus = $rows_musica['cod_mus'];

        
        ?>
        <div class="col-12">
        <label for="nome">Nome</label>
        <input type="text" name="nome_mus" class="form-control" value="<?php echo $nome_mus;?>">
        </div>

        <div class='col-12'>
        <label for='peso'>Gênero</label>
        <input type="text" name="genero_mus" class="form-control" value="<?php echo $genero_mus;?>">
		</div>
							
        <div class="col-12">
        <label for="link">Link</label>
        <?php
        echo "<input type='text' name='link' style='height: 140px;' class='form-control' value='".$link."'>";
        ?>
        </div>

        <div class="col-12">
        <label for="link">Nome do Artista</label>
        <select name='cod_artista' class='form-control' style='width:300px'>
        <?php
        // include("conexao.php");
									
        $sql1="SELECT nome FROM artista WHERE cod_artista = ".$cod_artista."";
        $sql2="SELECT * FROM artista";  
        $resultado=mysqli_query($conexao, $sql1);
        while($rows_artista=mysqli_fetch_array($resultado))
        {
            $nome_art = $rows_artista['nome'];
        }
        // echo "<select>";

        $resultado2=mysqli_query($conexao, $sql2);
        if (mysqli_num_rows($resultado2) >0){
        // echo "<option value='".$cod_artista."' selected>".$nome_art."</option>";
        // por causa dessa option acima irá ocorrer um duplicamento do artista nesse select
            while($row = mysqli_fetch_array($resultado2)){
                // echo "<option value='".$cod_artista."' selected>".$nome_art."</option>";
                echo "<option value='".$cod_artista."' style='visibility: hidden;'>".$nome_art."</option>";
                // no site fica com grande espaço entre as opções pois o artista a ser editado está com visibility hidden
                echo "<option value='".$row['cod_artista']."'>".$row['nome']."</option>"; 
            }
        }
        // echo "</select>";
        
        ?>
        </select>
        </div>

        <input type="hidden" name="codigo" value="<?php echo $cod_mus?>">
        </div>
      </div>
                    <button class="btn btn-primary btn-block">Alterar</button>
                    <div class="text-center">
                        <a href="index.php" class="d-block mt-3">Página inicial</a>
                    </div>
                </form>
            </div>
        </div>

        <?php
            }
        } 

        else if($acao == "excluir")
        {
       
            ?>
            <div class="card card-register mx-auto col-8 px-0">
            <div class="card-header bg-primary">Confirmar Exclusão</div>
            <div class="card-body">
                <form action="excluirmusica.php" method="POST">
                    <div class="form-group">
                        <div class="form-row">
        <?php
            include("conexao.php");
            
            $sql="SELECT * FROM musica WHERE cod_mus = ". $codigo ." LIMIT 5";
            $resultado_musica=mysqli_query($conexao, $sql);
            while($rows_musica=mysqli_fetch_array($resultado_musica))
            {
            $nome_mus = $rows_musica['nome_mus'];
            $genero_mus = $rows_musica['genero_mus'];
            $link = $rows_musica['link'];
            $cod_artista = $rows_musica['cod_artista'];
            $codigo = $rows_musica['cod_mus'];
        
        ?>
        <div class="col-12">
        <label for="nome">Nome da musica</label>
        <input type="text" name="nome_mus" class="form-control" disabled value="<?php echo $nome_mus;?>">
        </div>

        <div class='col-12'>
        <label for='link'>Gênero</label>
        <input type="text" name="genero_mus" class="form-control" disabled value="<?php echo $genero_mus;?>">
		</div>
							
        <div class="col-12">
        <label for="link">Link</label>
        <?php
        echo "<input type='text' name='link style='height: 140px;' class='form-control' disabled value='".$link."'>";
        ?>
        </div>

        <div class="col-12">
        <label for="nome do artista">Nome do Artista</label>
        <select name='cod_artista' class='form-control' disabled style='width:300px'>
        <?php
									
                $sql1="SELECT nome FROM artista WHERE cod_artista = ".$cod_artista.""; 
                $resultado=mysqli_query($conexao, $sql1);
                while($rows_artista=mysqli_fetch_array($resultado))
                {
                    $nome_art = $rows_artista['nome'];
                }
                echo "<option value='".$cod_artista."'>".$nome_art."</option>"; 
        ?>
        </select>
        </div>

        <input type="hidden" name="codigo" value="<?php echo $codigo?>">
        </div>
        
      </div>
                    <button class="btn btn-primary btn-block">Excluir</button>
                    <div class="text-center">
                        <a href="index.php" class="d-block mt-3">Página inicial</a>
                    </div>
                </form>
            </div>
        </div>
            <?php
                } 

            } 
            else
                {
                    require_once "Banco_de_Dados.php";
                    $bd = new Banco_de_Dados;
                    $bd -> listaMus();
                    ?>
                    <a href='index.php' style="padding: 15px;" class="btn btn-secondary btn-lg btn-block">Página inicial</a>
                    <?php
                }
            ?>

       
    </div>
    <?php
    }
    ?>       
</body>
</html>