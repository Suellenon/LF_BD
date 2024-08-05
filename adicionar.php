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

// Verifica se a requisição é do tipo POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $nome = $_POST['nome'];
        // Adiciona o carro no banco de dados
        $categoria->adicionar($nome);

     header('Location: categorias.php');
     exit(); 

    } 




?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categorias</title>
    <link rel="stylesheet" href="./css/styles.css">
    <script src="../javascript.js" defer></script>

</head>

<body>
    <header>
        <button id="button"><img src="../imgs/test.png" alt="" width="30px" onclick="barra_lateral()" id="btn-lateral"></button>
        <h1>LudoFashion</h1>
        <form action="" id="form-buscar">
            <input type="search" name="buscar" id="buscar" placeholder="buscar..."></input>
            <button type="submit" id="btn-buscar"><img src="../imgs/buscar.png" alt="" width="30px"></button>
        </form>
        <a href="../views/Cad.html" class="icon-link"><img src="../imgs/cadastro.png.png" alt="" width="40px"> Cadastre-se</a>
        <a href="../views/duvida.html" class="icon-link"> <img src="../imgs/ajuda.png.png" alt="" width="40px"> Dúvidas</a>
        <a href="../views/Minha lista de desejo.html" class="icon-link"> <img src="../imgs/wishlist.png" alt="" width="40px"> Favoritos</a>
        <a href="../views/Perfil.html" class="icon-link"> <img src="../imgs/perfil.png" alt="" width="40px"> Perfil</a>
       

    </header>
    <nav class="versao-mobile" id="versao-mobile">
        <a href="../views/Cad.html" class=""><img src="../imgs/cadastro.png.png" alt="" width="40px"> Cadastrar</a>
        <a href="../views/duvida.html" class=""> <img src="../imgs/ajuda.png.png" alt="" width="40px"> Dúvidas</a>
        <a href="../views/Minha lista de desejo.html" class=""> <img src="../imgs/wishlist.png" alt="" width="40px">Favoritos</a>
        <a href="../views/Perfil.html" class=""> <img src="../imgs/perfil.png" alt="" width="40px"> Perfil</a>
        <a href="../views/catálogo.html"><img src="../imgs/catalogue.png" alt="" width="40px"> Catálogo</a>
        <a href="../views/sobre a loja.html"><img src="../imgs/info.png" alt="" width="40px">Sobre a Loja</a>
    </nav>
    <nav>
        <a href="../views/catálogo.html">Catálogo</a>
        <a href="../views/sobre a loja.html">Sobre a Loja</a>


    </nav>
   
    <section>
        <h1 id="categorias-tit1"> <img src="../imgs/categoria.png" alt="" width="40px">Categorias</h1>
        <div class="Categorias">
            <span class="categorias-2">
                
            <form action="adicionar.php" method="post">
                    <div>
                        <label for="nome"> Categoria:</label>
                        <input type="nome" name="nome" id="nome"required>
                    </div>
                    <button type="submit">Adicionar Categoria</button>
            </span>
        </div>
    </section>
</body>