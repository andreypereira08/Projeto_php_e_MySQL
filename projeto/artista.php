<?php
    Class Artista
    {
        private $nome;
        private $email;
        private $data_de_nasc;
        private $cod_artista;

        public function setNome($nome)
        {
            $this->nome=$nome;
        }
        public function getNome(){
            
            return $this->nome;
        }


        public function setEmail($email)
        {  
            $this->email=$email;
        }
        public function getEmail()
        {            
            return $this->email;
        }


        public function setDataDeNasc($data_de_nasc)
        {
            $this->data_de_nasc = $data_de_nasc;
        }
        public function getDataDeNasc()
        {
            return $this->data_de_nasc;
            
        }
        
        
        public function setCodArtista($cod_artista)
        {        
            $this->cod_artista=$cod_artista;
        }
        public function getCodArtista()
        {
            return $this->cod_artista;
            
        }
        
    }
?>