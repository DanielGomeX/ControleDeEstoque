<?php
    class Cadastro {
        private $id;
		private $cpf;
        private $nome;
        private $data;
		private $telefone;
		private $email;

        public function setId($id) {
            $this->id = $id;
        }

        public function getId(){
            return $this->id;
        }

		public function setCpf($cpf) {
            $this->cpf = $cpf;
        }

        public function getCpf(){
            return $this->cpf;
        }
		
        public function setNome($nome) {
            $this->nome = $nome;
        }

        public function getNome(){
            return $this->nome;
        }

        public function setData($data) {
            $this->data = $data;
        }

        public function getData(){
            return $this->data;
        }
		
		public function setTelefone($telefone) {
            $this->telefone = $telefone;
        }

        public function getTelefone(){
            return $this->telefone;
        }
		
		public function setEmail($email) {
            $this->email = $email;
        }

        public function getEmail(){
            return $this->email;
        }
    }
?>