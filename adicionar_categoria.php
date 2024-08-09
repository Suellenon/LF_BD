<?php
require 'conexoes.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Obtém o nome da categoria do formulário
    $nome = $_POST['categoria'];

    // Verifica se o campo de nome não está vazio
    if (!empty($nome)) {
        // Prepara a consulta SQL para inserir a nova categoria
        $sql = "INSERT INTO categoria (nome) VALUES (?)";
        $stmt = $connect->prepare($sql);
        $stmt->bind_param("s", $nome);                              //bind_param(): É um método do objeto de declaração preparada que vincula variáveis aos parâmetros da consulta SQL. Esse método é usado para associar valores às placeholders (marcadores) na consulta preparada.

  
// "s": É uma string que define o tipo de dado do parâmetro que está sendo vinculado. No caso de "s", significa que o parâmetro é uma string. Outros possíveis tipos são:

// "i" para inteiros.
// "d" para números de ponto flutuante (double).
// "b" para blobs (dados binários).



        // Executa a consulta  
        if ($stmt->execute()) {
            echo "Categoria adicionada com sucesso!";
        } else {
            echo "Erro ao adicionar categoria: " . $connect->error;
        }

        // Fecha a declaração e a conexão
        $stmt->close();
        $connect->close();
    } else {
        echo "O nome da categoria é obrigatório.";
    }
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
        <a href="../views/duvida.html" class=""> <img src="./imgs/ajuda.png.png" alt="" width="40px"> Dúvidas</a>
        <a href="../views/Minha lista de desejo.html" class=""> <img src="./imgs/wishlist.png" alt="" width="40px">Favoritos</a>
        <a href="../views/Perfil.html" class=""> <img src="./imgs/perfil.png" alt="" width="40px"> Perfil</a>
        <a href="../views/catálogo.html"><img src="./imgs/catalogue.png" alt="" width="40px"> Catálogo</a>
        <a href="../views/sobre a loja.html"><img src="./imgs/info.png" alt="" width="40px">Sobre a Loja</a>
    </nav>
    <nav>
        <a href="../views/catálogo.html">Catálogo</a>
        <a href="../views/sobre a loja.html">Sobre a Loja</a>


    </nav>
   
    <section>
        <a href="categoriass.php">VOLTAR</a>
        <h1 id="categorias-tit1"> <img src="./imgs/categoria.png" alt="" width="40px">Categorias</h1>
        <div class="Categorias">
        
            <span class="categorias-2">

                <form action=""method="post">
                    <input type="hidden" name="id" value="">
                    <label for="">categoria</label>
                    <input type="text" name="categoria" id="">
                    <button type="submit">Atualizar Categoria</button>
                
                </form>
            </span>
        </div>
    </section>
</body>