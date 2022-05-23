create database bdcupcakeimagens;

use bdcupcakeimagens;

create table cobertura(
	id int not null primary key auto_increment,
	nome varchar(30) not null,
    conteudo mediumblob not null,
    tipo varchar(6) not null
);

create table granulado(
	id int not null primary key auto_increment,
	nome varchar(30) not null,
    conteudo mediumblob not null,
    tipo varchar(6) not null
);

create table massa(
	id int not null primary key auto_increment,
	nome varchar(30) not null,
    conteudo mediumblob not null,
    tipo varchar(6) not null
);

create table recheio(
	id int not null primary key auto_increment,
	nome varchar(30) not null,
    conteudo mediumblob not null,
    tipo varchar(6) not null
);

create table cupcake(
	id int not null primary key auto_increment,
	nome varchar(30) not null,
	idCobertura int not null REFERENCES cobertura (id),
	idGranulado int not null REFERENCES granulado (id),
	idMassa int not null REFERENCES massa (id),
	idRecheio int not null REFERENCES recheio (id)
);