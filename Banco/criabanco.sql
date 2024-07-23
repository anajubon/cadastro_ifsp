drop database if exists ifsp;

create database if not exists ifsp;

use ifsp;

create table cidade
(
    id          int auto_increment,
    nomecidade        varchar(100),
    estado      varchar(002),
    primary key(id)    
);

create table cliente
(
    id          int auto_increment,
    nome        varchar(100),
    email       varchar(100),
    senha       varchar(050),
    ativo       bool,
    id_cidade   int,
    primary key(id),
    constraint fk_clientecidade
        foreign key (id_cidade) references cidade(id)  
);
