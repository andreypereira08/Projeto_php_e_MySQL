<?php

    $servidor="localhost";
    $usuario="root";
    $senha="";
    $db="bdprojeto";
    
    $conexao=mysqli_connect($servidor, $usuario, $senha, $db);
	$_SESSION['conexao'] = $conexao;
    if(!$conexao){
        die("Houve um erro: ".mysqli_connect_errno());
    }
?>