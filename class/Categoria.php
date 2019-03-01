<?php
    class Categoria {
        private $id;
		private $produto;
        private $categoria;

        public function setId($id) {
            $this->id = $id;
        }

        public function getId(){
            return $this->id;
        }

		public function setProduto($produto) {
            $this->produto = $produto;
        }

        public function getProduto(){
            return $this->produto;
        }
		
        public function setCategoria($categoria) {
            $this->categoria = $categoria;
        }

        public function getCategoria(){
            return $this->categoria;
        }

        
    }
?>