<?php
class Categoria
{
    private $conexao;

    public function __construct($conexao)
    {
        $this->conexao = $conexao;
    }

    // Método para adicionar um carro
    public function adicionar($nome)
    {
        $sql = "INSERT INTO categoria (nome) VALUES (:nome)";
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindParam(':nome', $nome);
        $stmt->execute();
    }

    // Método para listar todos os carros
    public function listar()
    {
        $sql = "SELECT * FROM categoria";
        $stmt = $this->conexao->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Método para obter um carro por ID
    public function obterPorId($id)
    {
        $sql = "SELECT * FROM categoria WHERE id_categoria = :id";
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    // Método para atualizar um carro
    public function atualizar($id, $nome)
    {
        $sql = "UPDATE categoria SET nome= :nome  WHERE id_categoria = :id";
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':nome', $nome);
        $stmt->execute();
    }



    //   public function deletar($id)
    // {
    //     $id = implode(',', array_map('intval', $id));
    //     $sql = "DELETE FROM categoria WHERE id_categoria IN ($id)";
    //     $this->conexao->exec($sql);
    //  }
    // public function deletar($id)
    // {

    //     $sql = "DELETE FROM categoria WHERE id_categoria = :id";

    //     $stmt = $this->conexao->prepare($sql);

    //     $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    //     $stmt->execute();
        
    // }
    public function deletar($id)
{
    if (is_array($id)) {
        // Para múltiplos IDs
        $ids = implode(',', array_map('intval', $id));
        $sql = "DELETE FROM categoria WHERE id_categoria IN ($ids)";
    } else {
        // Para um único ID
        $sql = "DELETE FROM categoria WHERE id_categoria = :id";
    }

    $stmt = $this->conexao->prepare($sql);

    if (!is_array($id)) {
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    }

    $stmt->execute();
}
}
