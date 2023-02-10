<?php
    require_once "Banco_de_Dados.php";
	require_once "usuario.php";
		
    $nome=$_POST['nome'];
    $email=$_POST['email'];
	$senha = $_POST['senha'];
    $data_de_nasc=$_POST['data_de_nasc'];
	$adm = $_POST['adm'];
	$codigo = $_POST['codigo'];
 
    $usuario = new Usuario;
	$usuario -> setNome($nome);
	$usuario -> setEmail($email);
	$usuario -> setDataDeNasc($data_de_nasc);
	$usuario -> setSenha($senha);
	$usuario -> setAdm($adm);
	$usuario -> setCodUsuario($codigo);

	$bd = new Banco_de_Dados;
	$bd ->alteraUsu($usuario);

	// 
?>