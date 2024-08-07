<?php
// Inclui os arquivos de conexão e da classe Carro
require 'conexao.php';
require 'Categoria.php';


// Habilita a exibição de erros para depuração
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Cria a conexão com o banco de dados
$conexao = (new Conexao())->conectar();

// Cria uma instância da classe Carro
$categoria = new Categoria($conexao);

// Obtém o ID do carro a ser deletado
$id = $_POST['id'] ?? null;

if (is_numeric($id)) {
    // Deleta o carro
    $categoria->deletar($id);
    



    

}header('Location: Categorias.php');
exit(); 



?>