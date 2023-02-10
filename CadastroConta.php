<?php
    require_once "Banco_de_Dados.php";
	require_once "usuario.php";
	
		
    $nome=$_POST['nome'];
    $email=$_POST['email'];
	$senha=$_POST['senha'];
    $data_de_nascimento=$_POST['data_de_nasc'];
	$adm = $_POST['adm'];
	// $cod_usuario=$_POST['cod_usuario'];

 
    $usuario = new Usuario;
	$usuario -> setNome($nome);
	$usuario -> setEmail($email);
	$usuario -> setSenha($senha);
	$usuario -> setDataDeNasc($data_de_nascimento);
	$usuario -> setAdm($adm);
	// $usuario -> setCodUsuario($cod_usuario);
	
	$bd = new Banco_de_Dados;
	$bd -> Cadastra_Usuario($usuario);
?>