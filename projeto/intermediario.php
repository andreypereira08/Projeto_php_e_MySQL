<?php
    require_once "Banco_de_Dados.php";
    session_start();
	
    $email=$_POST['email'];
    $senha=$_POST['senha'];
    $cod_usuario = $_POST['cod_usuario'];
	
	$bd = new Banco_de_Dados;
	$bd -> login($email, $senha);
?>