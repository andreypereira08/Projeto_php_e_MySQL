<?php
    include("conexao.php");
	require_once "Banco_de_Dados.php";

    $pesquisa=$_POST['pesquisa'];
    $acao = $_POST['acao'];
	
	$bd = new Banco_de_Dados;
	
	if ($acao == 'alterar'){
		include('paginaaltera.php');
	}
	else if ($acao == 'excluir'){
		$bd -> deletaUsu($pesquisa);
	}
	else{ 	
	$bd ->listaUsu($pesquisa);
    }

	// Arquivo inutilizado, está sintetizado no paginaalteraConta.php
    
?>