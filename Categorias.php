<?php

// Inclui os arquivos de conexão e
require 'conexao.php';
require 'categoria.php';


// Cria a conexão com o banco de dados
$conexao = (new Conexao())->conectar();

$categoria = new Categoria($conexao);



// Obtém a lista do banco de dados
$categoria = $categoria->listar();

// Verifica se a requisição é do tipo POST (para deletar )
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['deletar'])) {

    $id = $_POST['id'];
    // Deleta os carros selecionados
    echo var_dump($id);
    echo gettype($id);
    $categoria->deletar($id);
    // Redireciona para a página inicial
    header('Location: Categorias.php');
    exit(); // Certifique-se de que o script é encerrado após o redirecionamento
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
        <a href="../views/Cad.html" class="icon-link"><img src="./imgs/cadastro.png.png" alt="" width="40px"> Cadastre-se</a>
        <a href="../views/duvida.html" class="icon-link"> <img src="./imgs/ajuda.png.png" alt="" width="40px"> Dúvidas</a>
        <a href="../views/Minha lista de desejo.html" class="icon-link"> <img src="./imgs/wishlist.png" alt="" width="40px"> Favoritos</a>
        <a href="../views/Perfil.html" class="icon-link"> <img src="./imgs/perfil.png" alt="" width="40px"> Perfil</a>


    </header>
    <nav class="versao-mobile" id="versao-mobile">
        <a href="../views/Cad.html" class=""><img src="./imgs/cadastro.png.png" alt="" width="40px"> Cadastrar</a>
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
        <h1 id="categorias-tit1"> <img src="./imgs/categoria.png" alt="" width="40px">Categorias</h1>

        <form action="Categorias.php" method="post">

            <div class="Categorias">
                <?php foreach ($categoria as $conjunto) : ?>
                    <div class="categorias-2">
                        <a><?= htmlspecialchars($conjunto['nome']) ?></a>
                        <a href="edit.php?id=<?= $conjunto['id_categoria'] ?>"><img src="./imgs/editar.png" alt="" width="25px" class="editar"></a>
                        <form action="delete.php" method="post" onsubmit="return confirm('Certeza que quer deletar?')">
                            <input type="hidden" name="id" value="<?= $conjunto['id_categoria'] ?>">
                            <button name="deletar" id="deletar"><img src="./imgs/lixeira.png" alt="" width="25px"></button>
                        </form>
                    </div>
                <?php endforeach; ?>
                <div class="adicionar">
                    <a href="adicionar.php">adicionar categoria</a>
                </div>
            </div>
        </form>

    </section>
</body>