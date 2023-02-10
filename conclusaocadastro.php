<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrado</title>
</head>
<body>
    <?php
  session_start();

  if(!isset($_SESSION['email']) AND !isset($_SESSION['senha']))
  {
    header("location: index.html");
    exit;
  }
    ?>
    <h1>Tal coisa cadastrado com sucesso</h1>
    <a href="index.php">Página inicial</a>
    <?header("Location: index.php");?>
    <br>
    
</body>
</html>