CREATE DATABASE categorias;
use categorias;
CREATE TABLE categoria(
    id_categoria int primary key auto_increment,
    nome varchar(255) not null
);