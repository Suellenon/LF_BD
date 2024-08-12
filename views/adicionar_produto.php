<?php
// Inclui os arquivos de conexão e da classe Carro
require 'conexao_produto.php';
require 'produto.php';


// Habilita a exibição de erros para depuração
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Cria a conexão com o banco de dados
$conexao = (new Conexao())->conectar();

// Cria uma instância da classe Carro
$produto = new produto($conexao);

// Verifica se a requisição é do tipo POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome_do_produto'];
    $cor = $_POST['cor'];
    $tamanho = $_POST['tamanho'];
    $descricao = $_POST['descricao_do_produto'];
    $caracteristicas= $_POST['caracteristicas_do_produto'];


     $produto->adicionar($nome,$cor, $tamanho,$descricao,$caracteristicas);
   
    } else {
     echo"Não foi possível adicionar os produtos";
    }

    // Redireciona para a página inicial
    header('Location: produtos_Cadastrados.php');
    exit(); // Certifique-se de que o script é encerrado após o redirecionamento

?>
