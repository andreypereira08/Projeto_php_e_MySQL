<?php
        require_once "Banco_de_Dados.php";
        require_once "musica.php";

        $codigo = $_POST['codigo'];
        $bd = new Banco_de_Dados;
        $bd ->DeletaMus($codigo);
?>