<?php
    Class Musica
    {
        private $nome_mus;
        private $cod_mus;
        private $genero_mus;
        private $link;
        private $cod_artista;

        public function setNomeM($nome_mus)
        {
            $this->nome_mus=$nome_mus;
        }
        public function getNomeM(){
            
            return $this->nome_mus;
        }


        public function setCodigoM($cod_mus)
        {  
            $this->cod_mus=$cod_mus;
        }
        public function getCodigoM()
        {            
            return $this->cod_mus;
        }


        public function setGeneroM($genero_mus)
        {
            $this->genero_mus=$genero_mus;
        }
        public function getGeneroM()
        {
            return $this->genero_mus;
            
        }

        public function setLink($link)
        {  
            $this->link=$link;
        }
        public function getLink()
        {            
            return $this->link;
        }

        public function setCodigoA($cod_artista)
        {  
            $this->cod_artista=$cod_artista;
        }
        public function getCodigoA()
        {            
            return $this->cod_artista;
        }
    }
?>