<?php
        require_once "Banco_de_Dados.php";
        
        $id_mus_usu = $_POST['id_mus_usu'];
    
        $bd = new Banco_de_Dados;
        $bd -> retirar_da_playlistadm($id_mus_usu);
?>