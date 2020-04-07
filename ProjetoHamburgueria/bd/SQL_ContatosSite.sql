create database dbContatos;

use dbContatos;

create table tblContatosSite(
	idContatoSite int auto_increment not null,
    nome varchar(100) not null,
    telefone varchar(13) not null,
    celular varchar(13) not null,
    email varchar(100) not null,
	profissao varchar(100) not null,
    sexo varchar(1) not null,
    homepage varchar(150),
    link varchar(150),
    classificacao varchar(8),
    mensagem text,

    primary key (idContatoSite)
);

show tables;

desc tblContatosSite;

select * from tblContatosSite;

#ALTER USER 'root'@'localhost' IDENTIFIED WITH mysql_native_password BY 'bcd127';

