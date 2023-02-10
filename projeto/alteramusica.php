<?php
    require_once "Banco_de_Dados.php";
	require_once "musica.php";

    $nome_mus=$_POST['nome_mus'];
    $genero_mus=$_POST['genero_mus'];
	$link = $_POST['link'];
	$cod_artista = $_POST['cod_artista'];
    $cod_mus = $_POST['codigo'];
	// $cod_mus=$_POST['cod_m'];
 
    $musica = new Musica;
	$musica -> setNomeM($nome_mus);
	$musica -> setGeneroM($genero_mus);
	$musica -> setLink($link);
	$musica -> setCodigoA($cod_artista);
    $musica -> setCodigoM($cod_mus);

	$bd = new Banco_de_Dados;
	$bd -> AlteraMusica($musica);

	// 
?>