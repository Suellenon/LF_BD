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
        $sql = "SELECT * FROM categoria WHERE id = :id";
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    // Método para atualizar um carro
    public function atualizar($nome)
    {
        $sql = "UPDATE categoria SET nome  WHERE id = :id";
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->bindParam(':nome', $marca);
       
        $stmt->execute();
    }

    // Método para deletar carros
    // public function deletar($ids)
    // {
    //     $ids = implode(',', array_map('intval', $ids));
    //     $sql = "DELETE FROM categoria WHERE id IN ($ids)";
    //     $this->conexao->exec($sql);
    // }
    public function deletar(){
        
        $sql = "DELETE FROM categoria WHERE id = :id";
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindParam(':id',$this->obterporId());
        $stmt->execute();

    }
}
?>