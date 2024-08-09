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
    $cod= $_POST['cod_prod'];
    $nome = $_POST['nome_prod'];
    $cor = $_POST['cor'];
    $tamanho = $_POST['tamanho'];
    $descricao = $_POST['descricao'];
    $caracteristicas= $_POST['caracteristicas'];

    // Lida com o upload da foto
    if (isset($_FILES['foto']) && $_FILES['foto']['error'] == UPLOAD_ERR_OK) {
        $fotoTmp = $_FILES['foto']['tmp_name'];
        $fotoNome = uniqid() . '.jpg'; // Gera um nome único para a foto
        $destino = 'uploads/' . $fotoNome;

        // Redimensiona a imagem para 218x148 px
        list($larguraOriginal, $alturaOriginal) = getimagesize($fotoTmp);
        $imagemOriginal = imagecreatefromjpeg($fotoTmp);
        $imagemRedimensionada = imagecreatetruecolor(218, 148);
        imagecopyresampled($imagemRedimensionada, $imagemOriginal, 0, 0, 0, 0, 218, 148, $larguraOriginal, $alturaOriginal);
        imagejpeg($imagemRedimensionada, $destino);

        // Adiciona o carro no banco de dados
        $produto->adicionar($cod, $nome,$cor, $tamanho,$descricao, $fotoNome,$caracteristicas);
    } else {
        // Adiciona o carro sem foto no banco de dados
        $produto->adicionar($cod, $nome,$cor, $tamanho,$descricao,$fotoNome,$caracteristicas);
    }

    // Redireciona para a página inicial
    header('Location: cadastrodeproduto.php');
    exit(); // Certifique-se de que o script é encerrado após o redirecionamento
}
?>
