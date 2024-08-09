<?php
class Categoria
{
    private $conexao;

    public function __construct($conexao)
    {
        $this->conexao = $conexao;
    }

    // Método para adicionar 
    public function adicionar($nome)
    {
        $sql = "INSERT INTO categoria (nome) VALUES (:nome)";
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindParam(':nome', $nome);
        $stmt->execute();
    }

    // Método para listar 
    public function listar()
    {
        $sql = "SELECT * FROM categoria";
        $stmt = $this->conexao->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Método para obter por ID
    public function obterPorId($id)
    {
        $sql = "SELECT * FROM categoria WHERE id_categoria = :id";
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    // Método para atualizar 
    public function atualizar($id, $nome)
    {
        $sql = "UPDATE categoria SET nome= :nome  WHERE id_categoria = :id";
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':nome', $nome);
        $stmt->execute();
    }



    // public function deletar($id)
    // {
    //     $id = intval($id);
    //     $sql = "DELETE FROM categoria WHERE id_categoria =$id";
    //     $this->conexao->exec($sql);
    // }
    public function deletar($id)
{
    $sql = "DELETE FROM categoria WHERE id_categoria = :id";
    $stmt = $this->conexao->prepare($sql);
    $stmt->bindValue(':id', $id, PDO::PARAM_INT);
    $stmt->execute();
}
}
