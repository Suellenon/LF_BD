<?php


?>





<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LUDOFASHION</title>
    <link rel="stylesheet" href="./css/styles.css">
    <script src="./javascript.js" defer></script>

</head>

<body>
    <header>
        <button id="button"><img src="./imgs/test.png" alt="" width="30px" onclick="barra_lateral()" id="btn-lateral"></button>
        <h1>LudoFashion</h1>
        <form action="" id="form-buscar">
            <input type="search" name="buscar" id="buscar" placeholder="buscar..."></input>
            <button type="submit" id="btn-buscar"><img src="./imgs/buscar.png" alt="" width="30px"></button>
        </form>
        <a href="./views/Cad.html" class="icon-link"><img src="../imgs/cadastro.png.png" alt="" width="40px"> Cadastre-se</a>
        <a href="./views/duvida.html" class="icon-link"> <img src="../imgs/ajuda.png.png" alt="" width="40px"> Dúvidas</a>
        <a href="../views/Minha lista de desejo.html" class="icon-link"> <img src="../imgs/wishlist.png" alt="" width="40px"> Favoritos</a>
        <a href="../views/Perfil.html" class="icon-link"> <img src="../imgs/perfil.png" alt="" width="40px"> Perfil</a>
       

    </header>
    <nav class="versao-mobile" id="versao-mobile">
        <a href="./views/Cad.html" class=""><img src="./imgs/cadastro.png.png" alt="" width="40px"> Cadastrar</a>
        <a href="../views/duvida.html" class=""> <img src="./imgs/ajuda.png.png" alt="" width="40px"> Dúvidas</a>
        <a href="./views/Minha lista de desejo.html" class=""> <img src="./imgs/wishlist.png" alt="" width="40px">Favoritos</a>
        <a href="../views/Perfil.html" class=""> <img src="./imgs/perfil.png" alt="" width="40px"> Perfil</a>
        <a href="./views/catálogo.html"><img src="./imgs/catalogue.png" alt="" width="40px"> Catálogo</a>
        <a href="../views/sobre a loja.html"><img src="./imgs/info.png" alt="" width="40px">Sobre a Loja</a>
    </nav>

    <nav>
        <a href="./views/catálogo.html">Catálogo</a>
        <a href="./views/sobre a loja.html">Sobre a Loja</a>


    </nav>
   
    <main>
       
        <section id="banner">
           
            <div id="txt-banner">
                <p>Promoção</p>
                <p style="font-size: 70px;">50%</p>
                <p style="font-size: 70px;">OFF</p>
                <p>Desconto em toda a coleção verão</p>
            </div>
        </section>
        <section class="conteudo">
            <h1>Desconto em toda a coleção verão</h1>
            <div class="card-container">
                <div class="card">
                    <div class="card-img">
                        <img src="./imgs/mulheres.png" width="100%" alt="">
                    </div>
                    <div class="card-content">
                        <p>R$ 500</p>
                    </div>
                </div>
                <div class="card">
                    <div class="card-img">
                        <img src="./imgs/mulheres.png" width="100%" alt="">
                    </div>
                    <div class="card-content">
                        <p>R$ 500</p>
                    </div>
                </div>
                <div class="card">
                    <div class="card-img">
                        <img src="./imgs/mulheres.png" width="100%" alt="">
                    </div>
                    <div class="card-content">
                        <p>R$ 500</p>
                    </div>
                </div>
                <div class="card">
                    <div class="card-img">
                        <img src="./imgs/mulheres.png" width="100%" alt="">
                    </div>
                    <div class="card-content">
                        <p>R$ 500</p>
                    </div>
                </div>
                <div class="card">
                    <div class="card-img">
                        <img src="./imgs/mulheres.png " width="100%" alt="">
                    </div>
                    <div class="card-content">
                        <p>R$ 500</p>
                    </div>

                </div>

                <div class="card">
                    <div class="card-img">
                        <img src="./imgs/mulheres.png" width="100%" alt="">
                    </div>
                    <div class="card-content">
                        <p>R$ 500</p>
                    </div>
                
                </div>
            </div>
        </section>
    </main>


</body>

</html>