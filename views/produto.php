<?php
class produto
{
    private $conexao;

    public function __construct($conexao)
    {
        $this->conexao = $conexao;
    }

    // Método para adicionar 
    public function adicionar($cod, $nome,$cor, $tamanho,$descricao, $fotoNome,$caracteristicas)
    {
        $sql = "INSERT INTO produtos (id, nome_do_produto, cor, tamanho, descricao_do_produto, foto, caracteristicas_do_produto) VALUES (:cod_prod, :nome_prod,:cor, :tamanho,:descricao, :foto, :caracteristicas)";
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindParam(':cod_prod', $cod);
        $stmt->bindParam(':nome_prod', $nome);
        $stmt->bindParam(':cor', $cor);
        $stmt->bindParam(':tamanho', $tamanho);
        $stmt->bindParam(':descricao', $descricao);
        $stmt->bindParam(':foto', $fotoNome);
        $stmt->bindParam(':caracteristicas', $caracteristicas);
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
    public function atualizar($cod, $nome, $cor, $tamanho, $descricao, $fotoNome,$caracteristicas)
    {
        $sql = "UPDATE produtos SET id = :cod_prod, nome_do_produto = :nome_prod, cor = :cor, tamanho = :tamanho, descricao_do_produto = :descricao, foto = :foto, caracteristicas_do_produto = :caracteristicas WHERE id = :id";
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindParam(':id', $cod, PDO::PARAM_INT);
        $stmt->bindParam(':nome_do_produto', $nome);
        $stmt->bindParam(':cor', $cor);
        $stmt->bindParam(':tamanho', $tamanho);
        $stmt->bindParam(':dscricao_do_produto', $descricao);
        $stmt->bindParam(':foto', $fotoNome);
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