<?php

    class CategoriaDAO {
        public function inserir(Categoria $categoria) {
            $query = 
                "insert into tb_categoria(produto, categoria)
                      values (:produto, :categoria)";

            $conexao = BaseDAO::conectar();
            $stmt = $conexao->prepare($query);

            $stmt->bindValue(':produto', $categoria->getProduto());
			$stmt->bindValue(':categoria', $categoria->getCategoria());
		
            $stmt->execute();
        }

        public function listar() {
            $query = "select * from tb_categoria order by id";
            $conexao = BaseDAO::conectar();
            
            $resultado = $conexao->query($query);
            $lista = $resultado->fetchAll();
            
            return $lista;
        }
		
		public function listarPorId($identificacao){
			$query= 'select * from tb_categoria where id = '. $identificacao;
			$conexao = BaseDAO::conectar();
            
            $resultado = $conexao->query($query);
            $lista = $resultado->fetch();
            
            return $lista;
		}
		public function editar(Categoria $categoria){
			$query = "update tb_categoria set produto = :produto, categoria = :categoria  where id = :id";
			$conexao = BaseDAO::conectar();
			$stmt = $conexao->prepare($query);
			
			$stmt->bindValue(':id', $categoria->getId());
			$stmt->bindValue(':produto', $categoria->getProduto());
            $stmt->bindValue(':categoria', $categoria->getCategoria());
            $stmt->execute();
		}
		
		public function excluir($id){
			$query = "delete from tb_categoria where id = :id";
			
			$conexao = BaseDAO::conectar();
			
			$stmt = $conexao->prepare($query);
			$stmt->bindValue(':id',$id);
			
			$stmt->execute();
		}
	
	}
?>