<?php
        require_once "Banco_de_Dados.php";
        require_once "usuario.php";

        $codigo = $_POST['codigo'];
        $bd = new Banco_de_Dados;
        $bd ->DeletaUsu($codigo);
?>