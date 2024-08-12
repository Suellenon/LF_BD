<?php
class produto
{
    private $conexao;

    public function __construct($conexao)
    {
        $this->conexao = $conexao;
    }

    // Método para adicionar 
    public function adicionar($nome,$cor, $tamanho,$descricao,$caracteristicas)
    {
        $sql = "INSERT INTO produtos (nome_do_produto, cor,tamanho, descricao_do_produto,caracteristicas_do_produto) VALUES (:nome_do_produto,:cor, :tamanho,:descricao_do_produto, :caracteristicas_do_produto)";
        $stmt = $this->conexao->prepare($sql);
        
        $stmt->bindParam(':nome_do_produto', $nome);
        $stmt->bindParam(':cor', $cor);
        $stmt->bindParam(':tamanho', $tamanho);
        $stmt->bindParam(':descricao_do_produto', $descricao);
       
        $stmt->bindParam(':caracteristicas_do_produto', $caracteristicas);
        $stmt->execute();
    }

    // Método para listar todos 
    public function listar()
    {
        $sql = "SELECT * FROM produtos";
        $stmt = $this->conexao->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Método para obter por ID
    public function obterPorId($id)
    {
        $sql = "SELECT * FROM produtos WHERE id = :id";
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    // Método para atualizar um carro
    public function atualizar( $nome, $cor, $tamanho, $descricao,$caracteristicas)
    {
        $sql = "UPDATE produtos SET nome_do_produto = :nome_prod, cor = :cor, tamanho = :tamanho, descricao_do_produto = :descricao,caracteristicas_do_produto = :caracteristicas WHERE id = :id";
        $stmt = $this->conexao->prepare($sql);
      
        $stmt->bindParam(':nome_do_produto', $nome);
        $stmt->bindParam(':cor', $cor);
        $stmt->bindParam(':tamanho', $tamanho);
        $stmt->bindParam(':dscricao_do_produto', $descricao);
        $stmt->bindParam(':caracteristicas_do_produto', $caracteristicas);
        $stmt->execute();
    }

    // Método para deletar 
    public function deletar($ids)
    {
        $ids = implode(',', array_map('intval', $ids));
        $sql = "DELETE FROM produtos WHERE id IN ($ids)";
        $this->conexao->exec($sql);
    }
}
?>