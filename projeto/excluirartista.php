<?php
        require_once "Banco_de_Dados.php";
        require_once "artista.php";

        $codigo = $_POST['codigo'];
        $bd = new Banco_de_Dados;
        $bd ->DeletaArt($codigo);
?>