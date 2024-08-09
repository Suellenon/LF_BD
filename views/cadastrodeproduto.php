<?php
require 'conexao_produto.php';
require 'produto.php';

// Cria a conexão com o banco de dados
$conexao = (new Conexao())->conectar();
// Cria uma instância da classe Carro
$produto = new produto($conexao);

$produtos = $produto->listar();


?>





<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro De Produto</title>
    <link rel="stylesheet" href="../css/styles.css">
    <script src="../javascript.js" defer></script>

</head>

<body>
    <header>
        <button id="button"><img src="../imgs/test.png" alt="" width="30px" onclick="barra_lateral()"
                id="btn-lateral"></button>
        <h1>LudoFashion</h1>
        <form action="" id="form-buscar">
            <input type="search" name="buscar" id="buscar" placeholder="buscar..."></input>
            <button type="submit" id="btn-buscar"><img src="../imgs/buscar.png" alt="" width="30px"></button>
        </form>

        <a href="../views/Cad.html" class="icon-link"><img src="../imgs/cadastro.png.png" alt="" width="40px">
            Cadastre-se</a>
        <a href="../views/duvida.html" class="icon-link"> <img src="../imgs/ajuda.png.png" alt="" width="40px">
            Dúvidas</a>
        <a href="../views/Minha lista de desejo.html" class="icon-link"> <img src="../imgs/wishlist.png" alt=""
                width="40px"> Favoritos</a>
        <a href="../views/Perfil.html" class="icon-link"> <img src="../imgs/perfil.png" alt="" width="40px"> Perfil</a>

    </header>
    <nav class="versao-mobile" id="versao-mobile">
        <a href="../views/Cad.html" class=""><img src="../imgs/cadastro.png.png" alt="" width="40px"> Cadastrar</a>
        <a href="../views/duvida.html" class=""> <img src="../imgs/ajuda.png.png" alt="" width="40px"> Dúvidas</a>
        <a href="../views/Minha lista de desejo.html" class=""> <img src="../imgs/wishlist.png" alt=""
                width="40px">Favoritos</a>
        <a href="../views/Perfil.html" class=""> <img src="../imgs/perfil.png" alt="" width="40px"> Perfil</a>
        <a href="../views/catálogo.html"><img src="../imgs/catalogue.png" alt="" width="40px"> Catálogo</a>
        <a href="../views/sobre a loja.html"><img src="../imgs/info.png" alt="" width="40px">Sobre a Loja</a>
    </nav>
    <nav>
        <a href="../views/catálogo.html">Catálogo</a>
        <a href="../views/sobre a loja.html">Sobre a Loja</a>
    </nav>
    <main class="cad_prod">
        <section >
            <p class="p_cad"><strong>Cadastro de Produto</strong></p>
            <p class="p_cad"> Detalhes do Produto</p>

            <div class="form-cad">
                <form action="adicionar_produto.php" method="post"  enctype="multipart/form-data">
                    <div >
                        <label for="cod_prod">Cod.prod</label>
                        <input type="number" name="cod_prod">
                        <label for="nome_prod">Nome do produto</label>
                        <input type="text" name="nome_prod" required>
                        <label for="cor">Cor</label>
                        <input type="text" name="cor">
                        <label for="tamanho">Tamanho</label>
                        <input type="text" name="tamanho" required>
                        <label for="descricao">Descrição do produto</label>
                        <input type="text" name="descricao" required>
                    </div>

                    <div class="cad" >
                        <label for="produto">Adicionar Produto</label>
                        <input type="file" name="foto" id="foto">
                        <label for="caract">Características do produto</label>
                        <textarea name="caracteristicas" id="características"></textarea>
                    </div>
                    <input type="submit" value="Confirmar" id="enviar_formcad">
                </form>
            </div>
        </section>
    </main>
</body>
</html>