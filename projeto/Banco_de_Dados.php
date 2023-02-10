<?php
require_once "usuario.php";

Class Banco_de_Dados
{

    //COMEÇO DOS MÉTODOS DO USUÁRIO

public function Cadastra_Usuario($usu)
    {

    include("conexao.php");

    $nome = $usu->getNome();
    $email = $usu->getEmail();
    $senha = $usu->getSenha();
    $data_de_nascimento = $usu->getDataDeNasc();
    $adm = $usu->getAdm();
    // $cod_usuario = $usu->getCodUsuario();

    $sql="INSERT INTO usuario(nome, email, senha, data_de_nasc, adm)
    VALUES ('$nome', '$email', '$senha', '$data_de_nascimento', '$adm')";

    if(mysqli_query($conexao, $sql))
    {
        $sql1="SELECT * FROM usuario WHERE email='".$email."' and  senha ='".$senha."'";
        $resultado_usuario = mysqli_query($conexao, $sql1);
    if(mysqli_num_rows($resultado_usuario)>0)
    {
      while($rows_adm=mysqli_fetch_array($resultado_usuario))  
    {	
    
     if ($rows_adm['adm'] == "sim") 
        echo "<script> window.location.href= 'conclusaocadastro.php'</script>";
    
     else
        echo "<script> window.location.href= 'index.html'</script>";
    }
    }
    }

    else
    {
    echo "ERROR: ".$sql."<br>".mysqli_error($conexao);
    }
    mysqli_close($conexao);
    }


    public function alteraUsu($usu)
	{
		
		include("conexao.php");
		$nome = $usu->getNome();
        $email = $usu->getEmail();
        $senha = $usu->getSenha();
        $adm = $usu->getAdm();
        $data_de_nasc = $usu->getDataDeNasc();

        $codigo = $usu->getCodUsuario();
		
		
		 $sql="UPDATE usuario SET nome = '$nome', email = '$email', senha = '$senha', data_de_nasc = '$data_de_nasc', adm = '$adm' WHERE cod_usuario = ". $codigo;

		if(mysqli_query($conexao, $sql))
		{
            echo "<script> window.location.href='index.php'</script>";
			// echo "Cadastro alterado";
			// echo "<p><a href='index.php'>Página inicial</a></p>";
		}
		else{
			echo "Não foi realizada a operação".mysqli_error($conexao);
			echo "<p><a href='index.php'>Página inicial</a></p>";
		}
		mysqli_close($conexao);

	}

    public function DeletaUsu($cod_usuario)
	{
		
		include("conexao.php");
		
		
		 $sql="DELETE FROM usuario WHERE cod_usuario='$cod_usuario'";

		if(mysqli_query($conexao, $sql))
		{
			echo "Cadastro excluído";
			echo "<p><a href='index.php'>Página inicial</a>";
            header("Location: index.php");
		}
		else{
			echo "Não foi realizada a operação".mysqli_error($conexao);
		}
		mysqli_close($conexao);

	}

    public function listaUsu()
	{
		include("conexao.php");
		
		$sql="SELECT * FROM usuario";
        $resultado=mysqli_query($conexao, $sql);

        if(mysqli_num_rows($resultado)>0){
            // echo "<h2 style='background-color: gray; text-align: center;' class='list-group-item list-group-item-action'>Visualizar Lista de Usuários</h2>";
            echo "<table class='table' name='tab_usuario'>
                  <tr>
                  <th>Nome</th>
                  <th>Email</th>
                  <th>Senha</th>
                  <th>Data de Nascimento</th>
                  </tr>";
			  
            while($row=mysqli_fetch_assoc($resultado)){
                
				if($row['adm'] == "sim")
                {
                    echo "<tr><td>".$row['nome']." &#10004;</td>";    
                }
                else
                {
                    echo "<tr><td>".$row['nome']."</td>";
                }
                
                echo "<td>".$row['email']."</td>";
                echo "<td>".$row['senha']."</td>";
                echo "<td>".$row['data_de_nasc']."</td>";
                "</tr>";
            }
            echo "</table>";
			
            // echo "<br>";
        }
        else{
            echo "Zero Resultado";
			echo "<a href='index.php' >Página inicial</a>";
        }
        mysqli_close($conexao);
    
	}

    // FIM DOS MÉTODOS DO USUÁRIO


    //COMEÇO DOS MÉTODOS DO ARTISTA

    public function Cadastra_Artista($art)
    {

    include("conexao.php");

    $nome = $art->getNome();
    $email = $art->getEmail();
    $data_de_nascimento = $art->getDataDeNasc();
    // $cod_usuario = $art->getCodUsuario();

    $sql="INSERT INTO artista(nome, email, data_de_nasc) VALUES ('$nome', '$email', '$data_de_nascimento')";

    if(mysqli_query($conexao, $sql))
    {
        // include "conclusaocadastro.php";
        header("Location: index.php");
    }
    else
    {
    echo "ERROR: ".$sql."<br>".mysqli_error($conexao);
    }
    mysqli_close($conexao);
    }


    public function AlteraArt($art)
	{
		
		include("conexao.php");
		$nome = $art->getNome();
        $email = $art->getEmail();
        $data_de_nasc = $art->getDataDeNasc();
        $codigo = $art->getCodArtista();
		
		
		 $sql="UPDATE artista SET nome = '$nome', email = '$email', data_de_nasc = '$data_de_nasc' WHERE cod_artista = ". $codigo;

		if(mysqli_query($conexao, $sql))
		{
			echo "Cadastro alterado";
			echo "<p><a href='index.php'>Página inicial</a></p>";
            header("Location: index.php");
		}
		else{
			echo "Não foi realizada a operação".mysqli_error($conexao);
			echo "<p><a href='index.php'>Página inicial</a></p>";
		}
		mysqli_close($conexao);

	}

    public function DeletaArt($cod_artista){
    
        include("conexao.php");
		
		
		 $sql="DELETE FROM artista WHERE cod_artista='$cod_artista'";

		if(mysqli_query($conexao, $sql))
		{
			echo "Artista excluído";
			echo "<p><a href='index.php'>Página inicial</a>";
            header("Location: index.php");
		}
		else{
			echo "Não foi realizada a operação".mysqli_error($conexao);
		}
		mysqli_close($conexao);


    }

        public function listaArt()
	{
		include("conexao.php");
		
		$sql="SELECT * FROM artista";
        $resultado=mysqli_query($conexao, $sql);

        if(mysqli_num_rows($resultado)>0){
            ?>
            <!DOCTYPE html>
            <html lang="pt-br">
            <head>
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                 <meta http-equiv="refresh">
            </head>
            <body>
                
            <?php

            // echo "<meta http-equiv="refresh" content="5; index.html">"
            // echo "<h2 style='background-color: gray; text-align: center;' class='list-group-item list-group-item-action'>Visualizar Lista de Artistas</h2>";

            echo "<table class='table' name='tab_artista'>
                  <tr>
                  <th>Nome</th>
                  <th>Email</th>
                  <th>Data de Nascimento</th>
                  </tr>";
			  
            while($row=mysqli_fetch_assoc($resultado)){
				
                echo "<tr><td>".$row['nome']."</td>";
                echo "<td>".$row['email']."</td>";
                echo "<td>".$row['data_de_nasc']."</td>";
                "</tr>";
            }
            echo "</table>";
			
            echo " </body>
            </html>";
        }
        else{
            echo "Zero Resultado";
			echo "<a href='index.php' >Página inicial</a>";
        }
        mysqli_close($conexao);
    
	}

    //FIM DOS MÉTODOS DO ARTISTA


    //COMEÇO DOS MÉTODOS DA MÚSICA

    public function Cadastra_Musica($mus)
    {

    include("conexao.php");

    $nome_mus = $mus->getNomeM();
    $genero_mus = $mus->getGeneroM();
    $link = $mus -> getLink();
    $cod_artista = $mus ->getCodigoA();
   
    $sql="INSERT INTO musica(nome_mus, genero_mus, link, cod_artista)
    VALUES ('$nome_mus', '$genero_mus', '$link', '$cod_artista')";

    if(mysqli_query($conexao, $sql))
    {
        // include "conclusaocadastro.php";
        header("Location: index.php");
    }
    else
    {
    echo "ERROR: ".$sql."<br>".mysqli_error($conexao);
    }
    mysqli_close($conexao);
    }


    public function AlteraMusica($mus)
	{
		
		include("conexao.php");
        $nome_mus = $mus -> getNomeM();
        $genero_mus = $mus -> getGeneroM();
        $link = $mus -> getLink();
        $cod_mus = $mus -> getCodigoM();

        $cod_artista = $mus -> getCodigoA();
		
		
		 $sql="UPDATE musica SET nome_mus = '$nome_mus', genero_mus = '$genero_mus', link = '$link', cod_artista = '$cod_artista' WHERE cod_mus = ". $cod_mus;

		if(mysqli_query($conexao, $sql))
		{
			echo "Música alterado";
			echo "<p><a href='index.php'>Página inicial</a></p>";
            header("Location: index.php");
		}
		else{
			echo "Não foi realizada a operação".mysqli_error($conexao);
			echo "<p><a href='index.php'>Página inicial</a></p>";
            header("Location: index.php");
		}
		mysqli_close($conexao);

	}

    public function DeletaMus($cod_mus)
	{
		
		include("conexao.php");
		
		
		 $sql="DELETE FROM musica WHERE cod_mus='$cod_mus'";

		if(mysqli_query($conexao, $sql))
		{
			echo "Musica excluída";
			echo "<p><a href='index.php'>Página inicial</a>";
            header("Location: index.php");
		}
		else{
			echo "Não foi realizada a operação".mysqli_error($conexao);
		}
		mysqli_close($conexao);

	}

    public function listaMus()
	{
		include("conexao.php");
		
		$sql="SELECT * FROM musica";
        $resultado=mysqli_query($conexao, $sql);

        if(mysqli_num_rows($resultado)>0){
            echo "<table class='table' name='tab_musica'>
                  <tr>
                  <th>Nome da Música</th>
                  <th>Gênero</th>
                  
                  <th>Link</th>
                  <th>Nome do Artista</th>
                  </tr>";
			  
            while($row=mysqli_fetch_assoc($resultado)){
                $cod_artista = $row['cod_artista'];

                $sql1="SELECT nome FROM artista WHERE cod_artista = ".$cod_artista.""; 
                $resultado1=mysqli_query($conexao, $sql1);
                while($rows_artista=mysqli_fetch_array($resultado1))
                {
                    $nome_art = $rows_artista['nome'];
                }

                echo "<tr><td>".$row['nome_mus']."</td>";
                echo "<td>".$row['genero_mus']."</td>";
                echo "<td style='width:570px; height:325px;'>".$row['link']."</td>";
                echo "<td>".$nome_art."</td>";
                echo "</tr>";
            }
            echo "</table> <br><br>";
            
        }
        else{
            echo "Zero Resultado";
			echo "<a href='index.php'>Página inicial</a>";
        }
        mysqli_close($conexao);
    
	}

    //FIM DOS MÉTODOS DA MÚSICA

    public function login($email, $senha2){
		include ("conexao.php");
            // echo $senha2;
			$sql="SELECT * FROM usuario WHERE email='".$email."' and  senha ='".$senha2."'";
			$resultado_usuario = mysqli_query($conexao, $sql);
            // echo $sql;
		if(mysqli_num_rows($resultado_usuario)>0)
		{
	      while($rows_adm=mysqli_fetch_array($resultado_usuario))  
		{	
		
		 if ($rows_adm['adm'] == "sim")
         {
            header("Location: index.php");
            session_start();
            $_SESSION['email'] = $email;
            $_SESSION['senha'] = $senha2;
            $_SESSION['cod_usuario'] = $rows_adm['cod_usuario'];
            $_SESSION['adm'] = $rows_adm['adm'];
        }
	    
		 else
        {
            header("Location: pag_principal.php");
            session_start();
            $_SESSION['email'] = $email;
            $_SESSION['senha'] = $senha2;
            $_SESSION['cod_usuario'] = $rows_adm['cod_usuario'];
            $_SESSION['adm'] = $rows_adm['adm'];
        }
		}
		}
		else { 
		function function_alert($message) {
            echo "<script>alert('$message');</script>";

          }
          echo "<title>Dados inválidos!!!</title>";
         function_alert("Usuário não encontrado, por favor tente novamente ou cadastre-se.");
         echo "<script> window.location.href= 'index.html'</script>";
        }

		
			mysqli_close($conexao);
	
		}


        public function adicionar_a_playlist($cod_mus, $cod_usuario)
        {
            include("conexao.php");
            
            $sql = "INSERT INTO mus_usu (id_mus_usu, cod_mus, cod_usuario)
            VALUES (DEFAULT, '$cod_mus', '$cod_usuario')";

            if(mysqli_query($conexao, $sql))
            {
                // include "conclusaocadastro.php";
                header("Location: pag_principal.php");
            }
            else
            {
                echo "ERROR: ".$sql."<br>".mysqli_error($conexao);
            }
            mysqli_close($conexao);
        }

        
        public function adicionar_a_playlistadm($cod_mus, $cod_usuario)
        {
            include("conexao.php");
            
            $sql = "INSERT INTO mus_usu (id_mus_usu, cod_mus, cod_usuario)
            VALUES (DEFAULT, '$cod_mus', '$cod_usuario')";

            if(mysqli_query($conexao, $sql))
            {
                // include "conclusaocadastro.php";
                header("Location: index.php");
            }
            else
            {
                echo "ERROR: ".$sql."<br>".mysqli_error($conexao);
            }
            mysqli_close($conexao);
        }

        public function retirar_da_playlist($id_mus_usu)
        {
            include("conexao.php");

            $sql = "DELETE FROM mus_usu WHERE id_mus_usu = '$id_mus_usu'";

            if(mysqli_query($conexao, $sql))
            {
                // include "conclusaocadastro.php";
                header("Location: playlist.php");
            }
            else
            {
                echo "ERROR: ".$sql."<br>".mysqli_error($conexao);
            }
            mysqli_close($conexao);
        }

        public function retirar_da_playlistadm($id_mus_usu)
        {
            include("conexao.php");

            $sql = "DELETE FROM mus_usu WHERE id_mus_usu = '$id_mus_usu'";

            if(mysqli_query($conexao, $sql))
            {
                // include "conclusaocadastro.php";
                header("Location: playlistadm.php");
            }
            else
            {
                echo "ERROR: ".$sql."<br>".mysqli_error($conexao);
            }
            mysqli_close($conexao);
        }

}

?>