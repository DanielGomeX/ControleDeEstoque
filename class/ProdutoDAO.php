<?php

    class ProdutoDAO {
        public function inserir(Produto $produto) {
            $query = 
                "insert into tb_produto(nome, quantidade)
                      values (:nome, :quantidade)";

            $conexao = BaseDAO::conectar();
            $stmt = $conexao->prepare($query);

            $stmt->bindValue(':nome', $produto->getNome());
            $stmt->bindValue(':quantidade', $produto->getQuantidade());
            $stmt->execute();
        }

        public function listar() {
            $query = "select * from tb_produto order by id";
            $conexao = BaseDAO::conectar();
            
            $resultado = $conexao->query($query);
            $lista = $resultado->fetchAll();
            
            return $lista;
        }
		
		public function listarPorId($identificacao){
			$query= 'select * from tb_produto where id = '. $identificacao;
			$conexao = BaseDAO::conectar();
            
            $resultado = $conexao->query($query);
            $lista = $resultado->fetch();
            
            return $lista;
		}
		public function editar(Produto $produto){
			$query = "update tb_produto set nome = :nome, quantidade = :quantidade where id = :id";
			$conexao = BaseDAO::conectar();
			$stmt = $conexao->prepare($query);
			
			$stmt->bindValue(':id', $produto->getId());
			$stmt->bindValue(':nome', $produto->getNome());
            $stmt->bindValue(':quantidade', $produto->getQuantidade());
            $stmt->execute();
		}
		
		public function excluir($id){
			$query = "delete from tb_produto where id = :id";
			
			$conexao = BaseDAO::conectar();
			
			$stmt = $conexao->prepare($query);
			$stmt->bindValue(':id',$id);
			
			$stmt->execute();
		}
	
	}
?>