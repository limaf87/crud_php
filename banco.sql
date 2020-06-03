create database teste;

use teste;

create table cliente(
    cod int primary key auto_increment,
    nome Varchar(50) not null,
    email varchar(50) not null,
    cpf char(11) not null unique,
    sexo char(1) not null
);

create table usuario(
    cod int primary key auto_increment,
    nome varchar(50) not null,
    email varchar(50) not null,
    login varchar(50) unique not null,
    senha char(32) not null,
    perfil enum('adm','user') not null
);

insert into usuario values(null,'admin', 'adm@', 'admin', md5('123'),'adm');
