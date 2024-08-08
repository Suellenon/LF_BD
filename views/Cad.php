<?php
$localhost = "localhost";
$username = "root";
$password = "";
$db_banco = "ludofashion";


$connect = mysqli_connect("$localhost", "$username", "$password", "$db_banco");


if (isset($_POST['btn-cadastrar'])) {

    $nome = mysqli_escape_string($connect, $_POST["nome"]);
    $email = mysqli_escape_string($connect, $_POST["email"]);
    $senha = mysqli_escape_string($connect, $_POST["senha"]);
    $numero_telefone = mysqli_escape_string($connect, $_POST["numero_telefone"]);
    $cpf = mysqli_escape_string($connect, $_POST["cpf"]);
    $data_nascimento = mysqli_escape_string($connect, $_POST["data_nascimento"]);

    $check = "SELECT * FROM usuarios WHERE email = '$email'";
    $result = mysqli_query($connect, $check);

    if (mysqli_num_rows($result) > 0) {
        
        echo "usuario ja tem esse email cadastrado";
        header('location:login.php');
    } else {
        $sql = "INSERT INTO usuarios (nome,email,senha,numero_telefone,cpf,data_nascimento)  VALUES ('$nome','$email','$senha','$numero_telefone','$cpf','$data_nascimento')";
        if ($connect->query($sql) === TRUE) {

            echo "Novo usuário cadastrado com sucesso";
            header('location:login.php');
        } else {
            echo "Erro ao cadastrar: " . $connect->error;


        }
    }
    $connect->close();
   
}





















?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
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
        <a href="../views/Cad.html" class="icon-link"><img src="../imgs/cadastro.png.png" alt="" width="40px">Cadastre-se</a>
        <a href="../views/duvida.html" class="icon-link"> <img src="../imgs/ajuda.png.png" alt="" width="40px"> Dúvidas</a>
        <a href="../views/Minha lista de desejo.html" class="icon-link"> <img src="../imgs/wishlist.png" alt="" width="40px">Favoritos</a>
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
        <a href="../views/sobre a loja.html ">Sobre a Loja</a>
    </nav>

    <section>
        <div class="cadastro">
            <h2>
                Cadastrar
            </h2>
            <form class="dados" action="" method='post'>

                <div class="dados-cadastro">
                    <label for="text">Nome:</label>
                    <input type="text" name="nome" id="text" placeholder="Seu Nome">
                </div>
                <div class="dados-cadastro">
                    <label for="password">Senha:</label>
                    <input type="password" name="senha" id="password" required placeholder="Sua Senha">
                </div>
                <div class="dados-cadastro">
                    <label for="email">Email:</label>
                    <input type="email" name="email" id="email" required placeholder="Email">
                </div>
                <div class="dados-cadastro">
                    <label for="number">Número de Telefone:</label>
                    <input type="number" name="numero_telefone" id="number" placeholder="Seu número de telefone">
                </div>
                <div class="dados-cadastro">
                    <label for="CPF">CPF:</label>
                    <input type="number" name="cpf" id="CPF" placeholder="Cpf">
                </div>
                <div class="dados-cadastro">
                    <label for="date">Data de Nascimento:</label>
                    <input type="date" name="data_nascimento" id="date" placeholder="sua data de nascimento">
                </div>


                <input type="submit" name='btn-cadastrar' value="Cadastrar" id="btn-cadastrar">
            </form>
            <div class="final">
                <div class="fim-cad">
                    <a href="../views/login.html">Já tem uma conta cadastrada?</a>
                    <p>
                        OU
                    </p>
                </div>
                <div class="icones-cadastro">
                    <img src="../imgs/google.png" alt="" width="30px">
                    <img src="../imgs/instagram.png" alt="" width="30px">
                </div>
            </div>
    </section>
</body>

</html>