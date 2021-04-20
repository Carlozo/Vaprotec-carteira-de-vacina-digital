create table usuario(
    nome varchar(40) not null,
    sexo char(1) not null
    email varchar(30) unique not null,
    senha varchar(15) not null,
    id_usuario serial primary key
);

create table vacinas(
    nome varchar(40) not null,
    id_vacina serial primary key,
    categoria varchar(40) not null
);

create table carteirinha(
    id_carteirinha serial primary key,
    id_usuario int,
    foreign key(id_usuario) references usuario(id_usuario)
);

create table carteirinha_vacina(
    id_carteirinha_vacina serial primary key,
    data_aplicacao date not null,
    id_vacina int,
    id_carteirinha int,
    foreign key(id_vacina) references vacinas(id_vacina),
    foreign key(id_carteirinha) references carteirinha(id_carteirinha)
);






