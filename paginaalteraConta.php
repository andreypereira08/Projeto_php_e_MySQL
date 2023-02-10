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
        header("location: formbuscaconta.php");
    }
    else{
        $codigo = $_POST['pesquisa'];
        $acao = $_POST['acao'];

        if($acao == "alterar")
        {
            echo "<title>Altera - Cadastro do Usuário</title>";
        }

        else if($acao == "excluir")
        {
            echo "<title>Excluir - Cadastro do Usuário</title>";
        }

        else
        {
            echo "<title>Visualizar - Lista de Usuários</title>";
        }
        ?>
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
                <form action="alteraconta.php" method="POST">
                    <div class="form-group">
                        <div class="form-row">
        <?php
            include("conexao.php");
            
            $sql="SELECT * FROM usuario WHERE cod_usuario = ". $codigo ." LIMIT 5";
            $resultado_usuario=mysqli_query($conexao, $sql);
            while($rows_usuario=mysqli_fetch_array($resultado_usuario))
            {
            $nome = $rows_usuario['nome'];
            $email = $rows_usuario['email'];
            $data_de_nasc = $rows_usuario['data_de_nasc'];
            $senha = $rows_usuario['senha'];
            $adm = $rows_usuario['adm'];
            $codigo = $rows_usuario['cod_usuario'];

        
        ?>
        <div class="col-12">
        <label for="nome">Nome</label>
        <input type="text" name="nome" class="form-control" value="<?php echo $nome;?>">
        </div>

        <div class='col-12'>
        <label for='peso'>Email</label>
        <input type="email" name="email" class="form-control" value="<?php echo $email;?>">
		</div>

        <div class='col-12'>
        <label for='senha'>Senha</label>
        <input type="password" name="senha" class="form-control" value="<?php echo $senha;?>">
		</div>
							
        <div class="col-12">
        <label for="altura">Data De Nascimento</label>
        <input type="date" name="data_de_nasc" class="form-control" value="<?php echo $data_de_nasc;?>">
        </div>

        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="adm" value="sim" id="flexCheckChecked" <?php if($adm == "sim"){echo "checked";}?>>
                <label class="form-check-label" for="flexCheckChecked">
                    Conta de Administrador
                </label>
            </div>

        <input type="hidden" name="codigo" value="<?php echo $codigo?>">
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
                <form action="excluirconta.php" method="POST">
                    <div class="form-group">
                        <div class="form-row">
        <?php
            include("conexao.php");
            
            $sql="SELECT * FROM usuario WHERE cod_usuario = ". $codigo ." LIMIT 5";
            $resultado_usuario=mysqli_query($conexao, $sql);
            while($rows_usuario=mysqli_fetch_array($resultado_usuario))
            {
            $nome = $rows_usuario['nome'];
            $email = $rows_usuario['email'];
            $data_de_nasc = $rows_usuario['data_de_nasc'];
            $adm = $rows_usuario['adm'];
            $senha = $rows_usuario['senha'];
            $codigo = $rows_usuario['cod_usuario'];
            }
        
        ?>
        <div class="col-12">
        <label for="nome">Nome</label>
        <input type="text" name="nome" class="form-control" disabled value="<?php echo $nome;?>">
        </div>

        <div class='col-12'>
        <label for='peso'>Email</label>
        <input type="email" name="email" class="form-control" disabled value="<?php echo $email;?>">
		</div>

        <div class='col-12'>
        <label for='senha'>Senha</label>
        <input type="password" name="senha" class="form-control" disabled value="<?php echo $senha;?>">
		</div>
							
        <div class="col-12">
        <label for="altura">Data De Nascimento</label>
        <input type="date" name="data_de_nasc" class="form-control" disabled value="<?php echo $data_de_nasc;?>">
        </div>
<br>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="adm" value="sim" disabled id="flexCheckChecked" <?php if($adm == "sim"){echo "checked";}?>>
                <label class="form-check-label" for="flexCheckChecked">
                    Conta de Administrador
                </label>
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
            else
                {
                    require_once "Banco_de_Dados.php";
                    $bd = new Banco_de_Dados;
                    $bd -> listaUsu();
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