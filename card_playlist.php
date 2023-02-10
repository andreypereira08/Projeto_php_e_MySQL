<style>
    .cartaomusica > iframe{
        width: 100%;
    }

    .cartaomaior{
        margin: auto;
    }
</style>

<?php

		include("conexao.php");

        $sql = 
        "SELECT mu.id_mus_usu, mu.cod_mus, mu.cod_usuario, u.nome, m.nome_mus, m.link, a.nome
        FROM mus_usu AS mu
        JOIN usuario AS u
        ON mu.cod_usuario = u.cod_usuario
        JOIN musica AS m
        ON mu.cod_mus = m.cod_mus
        JOIN artista AS a
        ON m.cod_artista = a.cod_artista
        WHERE mu.cod_usuario = $cod_usu_atual
        ORDER BY mu.id_mus_usu DESC"
        ;
        $resultado=mysqli_query($conexao, $sql);

        if(mysqli_num_rows($resultado)>0){

             while($row=mysqli_fetch_assoc($resultado)){
            $nome_art = $row['nome'];
            $nome_mus = $row['nome_mus'];

              ?>
              <div class="container contact-pop cartaomaior">
              <div class="row">
              <div class="col-md-6  pr-0">
                <div class="card cartaomusica">
                  <?php echo $row['link'];?>
                  </div>
                  </div>
                  <div class="col-md-6 pl-0" id="about">
                    <div class="content">
                      <h3><?php echo $nome_mus;?></h3>
                      <p>Nome do Artista: <?php echo $nome_art;?></p>
                      <br>

                      <form action="<?php echo $direcionamento_playlist2;?>" method="post">
                      <input type="hidden" name="id_mus_usu" value="<?php echo $row['id_mus_usu'];?>">
                      <button type="submit" class="btn" style="background-color: #E90E65; color: white">Retirar de favoritos</button>
                      </form>
                    </div>
                  </div>
              </div>
            </div>
            <br>

              <?php

            }
        }
        else{
          ?>
          <div class="container contact-pop cartaomaior">
              <div class="row">
              <div class="col-md-6  pr-0">
                <div class="card cartaomusica">
                  <img class="card-img w-100" src="assets/img/sing.jpg" alt="">
                  <div class="card-img-overlay">
                    <p>
                      Zero resultado
                    </p>
                  </div>
                  </div>
                  </div>
                  <div class="col-md-6 pl-0" id="about">
                    <div class="content">
                      <h3>Nenhuma Música</h3>

                      <p>Nome do Artista: Sem Artista</p>
                      <br>
                      <a href="#" class="btn">Montar playlist</a>
                    </div>
                  </div>
              </div>
            </div>
            <br>

            <?php
        }
        mysqli_close($conexao);
    

  ?>