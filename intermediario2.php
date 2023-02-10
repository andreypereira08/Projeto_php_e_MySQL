<?php
    require_once "Banco_de_Dados.php";
	
    $nome=$_POST['nome1'];
    $email=$_POST['email1'];
	$senha=$_POST['senha1'];
    $data_de_nascimento=$_POST['data_de_nasc1'];

 
    $usuario = new Usuario;
	$usuario -> setNome($nome);
	$usuario -> setEmail($email);
	$usuario -> setSenha($senha);
	$usuario -> setDataDeNasc($data_de_nascimento);
	
	$bd = new Banco_de_Dados;
	$bd -> Cadastra_Usuario($usuario);
?>