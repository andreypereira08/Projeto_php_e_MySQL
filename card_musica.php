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
              "SELECT m.nome_mus, m.link, m.cod_mus, a.nome FROM musica AS m
              LEFT JOIN mus_usu AS mu
              ON m.cod_mus = mu.cod_mus
              JOIN usuario AS u
              ON u.cod_usuario = $cod_usu_atual
              JOIN artista AS a
              ON a.cod_artista = m.cod_artista
              WHERE mu.cod_mus IS NULL
              ORDER BY m.cod_mus DESC"
              ;

        $resultado=mysqli_query($conexao, $sql);

        if(mysqli_num_rows($resultado)>0){

            while($row=mysqli_fetch_assoc($resultado)){

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
                      <h3><?php echo $row['nome_mus'];?></h3>
                      <p>Nome do Artista: <?php echo $row['nome'];?></p>
                      <br>

                      <form action="<?php echo $direcionamento_playlist;?>" method="post">
                      <input type="hidden" name="cod_mus" value="<?php echo $row['cod_mus'];?>"> 
                   
                    <input type="hidden" name="cod_usuario" value="<?php echo $cod_usu_atual;?>">
                        <button class="btn" type="submit" style="background-color: #E90E65; color: white">Favoritar</button>
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