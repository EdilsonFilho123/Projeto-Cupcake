
create database chatsimples;

use chatsimples;

create table chat1(
    id int not null auto_increment primary key,
    nome varchar(30) not null,
    mensagem text not null
);