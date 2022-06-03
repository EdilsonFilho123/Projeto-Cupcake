create database bdcupcake;

use bdcupcake;

create table usuario(
	id int not null primary key auto_increment,
    nome varchar(30) not null,
    email varchar(50) not null unique,
    senha varchar(50) not null,
    emailRecuperacao varchar(50),
    nivel boolean default false
);

create table pedido(
	id int not null primary key auto_increment,
	estado varchar(20) not null,
	idUsuario int not null REFERENCES usuario (id)
);

create table cobertura(
	id int not null primary key auto_increment,
	nome varchar(30) not null,
    idImagem int not null
);

create table granulado(
	id int not null primary key auto_increment,
	nome varchar(30) not null,
    idImagem int not null
);

create table massa(
	id int not null primary key auto_increment,
	nome varchar(30) not null,
    idImagem int not null
);

create table recheio(
	id int not null primary key auto_increment,
	nome varchar(30) not null,
    idImagem int not null
);

create table cupcake(
	id int not null primary key auto_increment,
	nome varchar(30) not null,
	idCobertura int not null REFERENCES cobertura (id),
	idGranulado int not null REFERENCES granulado (id),
	idMassa int not null REFERENCES massa (id),
	idRecheio int not null REFERENCES recheio (id)
);

create table historico(
	id int not null primary key auto_increment,
	dataHora datetime not null,
	quantidade int default 1,
	idPedido int not null REFERENCES pedido (id),
	idCupcake int not null REFERENCES cupcake (id)
);