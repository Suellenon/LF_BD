<?php



$localhost = "localhost";
$username = "root";
$password = "";
$db_banco = "ludofashion";


$connect = mysqli_connect("$localhost", "$username", "$password", "$db_banco");

if ($connect->connect_error) {
    die("Conexão falhou: " . $connect->connect_error);
}
    


?>