<?php

    // $servidor="localhost";
    // $usuario="root";
    // $senha="";
    // $db="bdprojeto";

    $servidor = "sql309.ezyro.com";
    $usuario = "ezyro_33212438";
    $senha = "fe6hvsc";
    $db = "ezyro_33212438_bdprojeto";
    
    $conexao=mysqli_connect($servidor, $usuario, $senha, $db);
	$_SESSION['conexao'] = $conexao;
    if(!$conexao){
        die("Houve um erro: ".mysqli_connect_errno());
    }
?>
