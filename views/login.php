
<?php
$localhost = "localhost";
$username = "root";
$password = "";
$db_banco = "ludofashion";


$connect = mysqli_connect("$localhost", "$username", "$password", "$db_banco");






?>







<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../css/styles.css">
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
        <a href="Cadastro.html" class="icon-link"><img src="../imgs/cadastro.png.png" alt="" width="40px">
            Cadastre-se</a>
        <a href="dúvidas.html" class="icon-link"> <img src="../imgs/ajuda.png.png" alt="" width="40px"> Dúvidas</a>
        <a href="../views/Minha lista de desejo.html" class="icon-link"> <img src="../imgs/wishlist.png" alt=""
                width="40px"> Favoritos</a>
        <a href="../views/Perfil.html" class="icon-link"> <img src="../imgs/perfil.png" alt="" width="40px"> Perfil</a>

    </header>
    <nav class="versao-mobile" id="versao-mobile">
        <a href="../views/Cad.html" class=""><img src="../imgs/cadastro.png.png" alt="" width="40px"> Cadastrar</a>
        <a href="../views/duvida.html" class=""> <img src="../imgs/ajuda.png.png" alt="" width="40px"> Dúvidas</a>
        <a href="../views/Minha lista de desejo.html" class=""> <img src="../imgs/wishlist.png" alt=""width="40px">Favoritos</a>
        <a href="../views/Perfil.html" class=""> <img src="../imgs/perfil.png" alt="" width="40px"> Perfil</a>
        <a href="../views/catálogo.html"><img src="../imgs/catalogue.png" alt="" width="40px"> Catálogo</a>
        <a href="../views/sobre a loja.html"><img src="../imgs/info.png" alt="" width="40px">Sobre a Loja</a>
    </nav>



    <nav>
        <a href="../views/catálogo.html">Catálogo</a>
        <a href="../views/sobre a loja.html ">Sobre a Loja</a>
    </nav>
   
    <section id="login">

        <div class="caixa-login">
            <h1>
                Login
            </h1>

            <form action="" method="post">
                <div class="perg-login">
                    <label for="email">Email:</label>
                    <input type="email" name="email" id="email" placeholder="Email" required>
                </div>
                <div class="perg-login">
                    <label for="password">Senha:</label>
                    <input type="password" name="senha" id="password" placeholder="Senha" required>

                </div>
                <button id="btn-login" type="submit">Login</button>
                
            </form>
            <div id="fim-login">
                <p>Ou</p>
                <img src="../imgs/google.png" alt="" height="35px">
                <img src="../imgs/instagram.png" alt="" height="35px">
            </div>
            <div class="links-login">
                <a href="./Cad.php">Cadastrar</a>
                <a href="">Precisa de Ajuda?</a>
            </div>


        </div>
    </section>