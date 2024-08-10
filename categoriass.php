<?php
require 'conexoes.php';
$sql = "SELECT * FROM categoria";
$stmt = $connect->prepare($sql);
$stmt->execute();
$result = $stmt->get_result();




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
        <h1 id="categorias-tit1"> <img src="./imgs/categoria.png" alt="" width="40px">Categorias</h1>
        <div class="Categorias">
        <?php while ($row = $result->fetch_assoc()): ?>
            <span class="categorias-2">

                <form action="editar.php"method="post">
                    <input type="hidden" name="id" value="<?php echo htmlspecialchars($row['id_categoria']); ?>">
                    <a><?php echo htmlspecialchars($row['nome']); ?></a>
                   
                    <a href="editar.php?id=<?=($row['id_categoria']);?>"><img src="./imgs/editar.png" alt="" width="40px"></a>
                </form>
                
                <form action="deletar_categoria.php" method="post" onsubmit="return confirm('Deseja excluir essa categoria?')">
                    <input type="hidden" name="id"  value="<?php echo htmlspecialchars($row['id_categoria']);?>" >

                    <a href="deletar_categoria.php?id=<?=($row['id_categoria']);?>"><input type="image" src="./imgs/lixeira.png" alt="" width="40px" value="" name="excluir"></a>
                </form>
              
            </span>
            <?php endwhile; ?>
           
        
            
      

            <span class="adicionar">
              <img src="./imgs/mais.png" alt="" width="50px"><a href="adicionar_categoria.php">Adicionar Categoria</a>
            </span>
        
        </div>
    </section>
</body>