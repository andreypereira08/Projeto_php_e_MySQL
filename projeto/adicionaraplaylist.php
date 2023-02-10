    <?php
    // definir os dados cod_usuario e cod_mus
    require_once "Banco_de_Dados.php";

    $cod_usuario = $_POST['cod_usuario'];
    $cod_mus = $_POST['cod_mus'];

    $bd = new Banco_de_Dados;
	$bd -> adicionar_a_playlist($cod_mus, $cod_usuario);
    ?>