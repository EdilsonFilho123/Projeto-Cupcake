create database bdcupcakeimagens;

use bdcupcakeimagens;

create table imagem(
	id int not null primary key auto_increment,
    conteudo mediumblob not null,
    tipo varchar(6) not null
);