create database if not exists cpm23;
use cpm23;

create table if not exists cozinheiro (
    id int NOT NULL AUTO_INCREMENT,
    nome varchar(20),
    email varchar(50) NOT NULL,
    senha varchar(50) NOT NULL,
    faixa_preco int,
    avaliacao int, 
    endereco varchar(40),
    categoria varchar(15),
    primary key (id)
);

create table if not exists prato (
    id int NOT NULL AUTO_INCREMENT,
    nome varchar(20),
    preco int,
    descricao varchar(100),
    cozinheiro_id int,
    primary key (id),
    foreign key (cozinheiro_id) references cozinheiro(id)
);

create table if not exists cliente (
    id int NOT NULL AUTO_INCREMENT,
    nome varchar(20),
    email varchar(50) NOT NULL,
    senha varchar(50) NOT NULL,
    endereco varchar(40),
    primary key (id)
);

 create table if not exists pedido (
    id int NOT NULL AUTO_INCREMENT,
    cozinheiro_id int,
    cliente_id int,
    prato_id int,
    primary key (id),
    foreign key (cozinheiro_id) references cozinheiro(id),
    foreign key (cliente_id) references cliente(id),
    foreign key (prato_id) references prato(id)
 );
