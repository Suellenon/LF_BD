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
    <title>Produtos Cadastrado</title>
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
        <a href="../views/Cad.html" class="icon-link"><img src="../imgs/icon.png.png" alt=""
                width="40px">Cadastre-se</a>
        <a href="../views/duvida.html" class="icon-link"> <img src="../imgs/ajuda.png" alt="" width="40px"> Dúvidas</a>

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

    <section class="cadastro-produto">
        <div class="produtos-cadastrados">
            <p><strong>Produtos Cadastrados</strong></p>
            <a href="cadastrodeproduto.php">Cadastrar produtos</a>

            <!-- <input type="button" value="Inserir Produto"> -->
        </div>

        <div class="prod_cadastrado">
            <table class="tabela_prod">
                <tr>
                    <td>
                        <strong>cod. produto</strong>
                    </td>
                    <td>
                        <strong>Nome do produto</strong>
                    </td>
                    <td>
                        <strong>Cor</strong>
                    </td>
                    <td>
                        <strong>Tamanho</strong>
                    </td>
                    <td><strong>Descrição do produto</strong></td>
                </tr>
                </td>
                <?php foreach ($produtos as $produto) :  ?>
                        <tr>
                            <td>
                                <?=htmlspecialchars ($produto['id']) ?>
                            </td>
                            <td>
                                <?=htmlspecialchars ($produto['nome_do_produto']) ?>
                            </td>
                            <td>
                                <?= htmlspecialchars($produto['cor']) ?>
                            </td>
                            <td>
                                <?= htmlspecialchars($produto['tamanho']) ?>
                            </td>
                            <td> <?= htmlspecialchars($produto['descricao_do_produto']) ?></td>
                            <td>
                                <input type="number" name="ids[]" value="<?= $produto['id'] ?>">
                                <a href="delete_produto.php?id=<?= ($produto['id']); ?>" onclick="return confirm('Certeza que quer excluir esse produto?');">
                                    <button type="button" name="deletar" id="btn_deletar">Excluir</button>
                                </a>
                            </td>

                        </tr>
                    
                <?php endforeach; ?>



            </table>
        </div>
    </section>
</body>

</html>