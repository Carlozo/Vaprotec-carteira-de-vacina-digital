create database vacinei;

create table usuario(
    nome varchar(40),
    email varchar(30) unique,
    senha varchar(15),
    id_usuario int auto_increment,
    primary key(id_usuario)
);

create table vacinas(
    nome varchar(40),
    id_vacina int auto_increment,
    primary key(id_vacina)
);

create table carteirinha(
    id_carteirinha int auto_increment,
    id_usuario int unique,
    primary key(id_carteirinha),
    foreign key(id_usuario) references usuario(id_usuario)
);

create table carteirinha_vacina(
    data_aplicacao date,
    id_vacina int unique,
    id_carteirinha int unique,
    foreign key(id_vacina) references vacinas(id_vacina),
    foreign key(id_carteirinha) references carteirinha(id_carteirinha)
);