<?php
    require_once "Banco_de_Dados.php";
	require_once "artista.php";
		
    $nome=$_POST['nome'];
    $email=$_POST['email'];
    $data_de_nasc=$_POST['data_de_nasc'];
	$codigo = $_POST['codigo'];
 
    $artista = new Artista;
	$artista -> setNome($nome);
	$artista -> setEmail($email);
	$artista -> setDataDeNasc($data_de_nasc);
	$artista -> setCodArtista($codigo);

	$bd = new Banco_de_Dados;
	$bd ->AlteraArt($artista);

	// 
?>