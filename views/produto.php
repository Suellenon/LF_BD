<?php
class produto
{
    private $conexao;

    public function __construct($conexao)
    {
        $this->conexao = $conexao;
    }

    // Método para adicionar um carro
    public function adicionar($cod, $nome,$cor, $tamanho,$descricao, $fotoNome,$caracteristicas)
    {
        $sql = "INSERT INTO produtos (id, nome_do_produto, cor, tamanho, descricao_do_produto, foto, caracteristicas_do_produto) VALUES (:cod_prod, :nome_prod,:cor, :tamanho,:descricao, :foto, :caract)";
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindParam(':cod_prod', $cod);
        $stmt->bindParam(':nome_prod', $nome);
        $stmt->bindParam(':cor', $cor);
        $stmt->bindParam(':tamanho', $tamanho);
        $stmt->bindParam(':descricao', $descricao);
        $stmt->bindParam(':foto', $fotoNome);
        $stmt->bindParam(':caract', $caracteristicas);
        $stmt->execute();
    }

    // Método para listar todos os carros
    public function listar()
    {
        $sql = "SELECT * FROM produtos";
        $stmt = $this->conexao->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Método para obter um carro por ID
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
        $sql = "UPDATE produtos SET id = :cod_prod, nome do produto = :nome_prod, cor = :cor, tamanho = :tamanho, descricao do produto = :descricao, foto = :foto, caracteristicas do produto = :caract WHERE id = :id";
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindParam(':id', $cod, PDO::PARAM_INT);
        $stmt->bindParam(':nome_prod', $nome);
        $stmt->bindParam(':cor', $cor);
        $stmt->bindParam(':tamanho', $tamanho);
        $stmt->bindParam(':dscricao', $descricao);
        $stmt->bindParam(':foto', $fotoNome);
        $stmt->bindParam(':caract', $caracteristicas);
        $stmt->execute();
    }

    // Método para deletar carros
    public function deletar($ids)
    {
        $ids = implode(',', array_map('intval', $ids));
        $sql = "DELETE FROM produtos WHERE id IN ($ids)";
        $this->conexao->exec($sql);
    }
}
?>