<?php
    Class Usuario
    {
        private $nome;
        private $email;
        private $data_de_nasc;
        private $senha;
        private $adm;
        private $cod_usuario;

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

        public function setSenha($senha)
        {
            $this->senha=$senha;
        }
        public function getSenha(){
            
            return $this->senha;
        }


        public function setDataDeNasc($data_de_nascimento)
        {
            $this->data_de_nasc = $data_de_nascimento;
        }
        public function getDataDeNasc()
        {
            return $this->data_de_nasc;
            
        }
        
        public function setAdm($adm)
        {
            $this->adm = $adm;
        }
        public function getAdm()
        {
            return $this->adm;
            
        }
        
        
        public function setCodUsuario($cod_usuario)
        {        
            $this->cod_usuario=$cod_usuario;
        }
        public function getCodUsuario()
        {
            return $this->cod_usuario;
            
        }
        
    }
?>