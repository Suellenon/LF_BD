<?php
require 'conexao_produto.php';
require 'produto.php';

// Cria a conexão com o banco de dados
$conexao = (new Conexao())->conectar();

// Cria uma instância da classe Carro
$produto = new Produto($conexao);

// Obtém o ID do carro a ser deletado
$id = $_GET['id'] ?? null;
if ($id) {
    // Deleta
    $produto->deletar([$id]);
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['deletar'])) {
        $id = $_GET['id'];
        // Deleta os carros selecionados
        $produto->deletar($id);
        // Redireciona para a página inicial
       
    } header('Location: produtos_Cadastrados.php');
        exit(); // Certifique-se de que o script é encerrado após o redirecionamento

}
 




?>