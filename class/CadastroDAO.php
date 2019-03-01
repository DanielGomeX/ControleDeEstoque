<?php

    class CadastroDAO {
        public function inserir(Cadastro $pessoa) {
            $query = 
                "insert into tb_pessoa(cpf,nome,data,telefone,email)
                      values (:cpf,:nome,:data,:telefone,:email)";

            $conexao = BaseDAO::conectar();
            $stmt = $conexao->prepare($query);
			
			$stmt->bindValue(':cpf', $pessoa->getCpf());
            $stmt->bindValue(':nome', $pessoa->getNome());
            $stmt->bindValue(':data', $pessoa->getData());
			$stmt->bindValue(':telefone', $pessoa->getTelefone());
			$stmt->bindValue(':email', $pessoa->getEmail());
            $stmt->execute();
        }

		
		
        public function listar() {
            $query = "select * from tb_pessoa order by id";
            $conexao = BaseDAO::conectar();
            
            $resultado = $conexao->query($query);
            $lista = $resultado->fetchAll();
            
            return $lista;
        }
		
		public function listarPorId($identificacao){
			$query= 'select * from tb_pessoa where id = '. $identificacao;
			$conexao = BaseDAO::conectar();
            
            $resultado = $conexao->query($query);
            $lista = $resultado->fetch();
            
            return $lista;
		}
		public function editar(Cadastro $pessoa){
			$query = "update tb_pessoa set cpf = :cpf, nome = :nome, data = :data, telefone = :telefone, email = :email where id = :id";
			$conexao = BaseDAO::conectar();
			$stmt = $conexao->prepare($query);
			
			$stmt->bindValue(':id', $pessoa->getId());
			$stmt->bindValue(':cpf', $pessoa->getCpf());
            $stmt->bindValue(':nome', $pessoa->getNome());
            $stmt->bindValue(':data', $pessoa->getData());
			$stmt->bindValue(':telefone', $pessoa->getTelefone());
			$stmt->bindValue(':email', $pessoa->getEmail());
            $stmt->execute();
		}
		
		public function excluir($id){
			$query = "delete from tb_pessoa where id = :id";
			
			$conexao = BaseDAO::conectar();
			
			$stmt = $conexao->prepare($query);
			$stmt->bindValue(':id',$id);
			
			$stmt->execute();
		}
	
	}
?>