<?php
    require_once "Banco_de_Dados.php";
	require_once "artista.php";
	
		
    $nome=$_POST['nome'];
    $email=$_POST['email'];
    $data_de_nascimento=$_POST['data_de_nasc'];
	// $cod_usuario=$_POST['cod_usuario'];

 
    $artista = new Artista;
	$artista -> setNome($nome);
	$artista -> setEmail($email);
	$artista -> setDataDeNasc($data_de_nascimento);
	// $usuario -> setCodUsuario($cod_usuario);
	
	$bd = new Banco_de_Dados;
	$bd -> Cadastra_Artista($artista);
?>