create database bdcupcakeimagens;

use bdcupcakeimagens;

create table imagem(
	id int not null primary key auto_increment,
    conteudo mediumblob not null,
    tipo varchar(6) not null
);

create table propaganda(
	id int not null primary key auto_increment,
    nome varchar(30),
    idImagem int not null REFERENCES imagem (id),
    atual int default 1
);