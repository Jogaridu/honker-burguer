create database dbContatos;

use dbContatos;

# ----------------- FALE CONOSCO -----------------
create table tblClassificacao(
	idClassificacao int auto_increment not null primary key,
    nomeClassificacao varchar(20) not null
);

create table tblContatosSite(
	idContatoSite int auto_increment not null  primary key,
    nome varchar(100) not null,
    telefone varchar(18) not null,
    celular varchar(18) not null,
    email varchar(100) not null,
	profissao varchar(100) not null,
    sexo varchar(1) not null,
    homepage varchar(150),
    link varchar(150),
    mensagem text,
	idClassificacao int not null,
    
    constraint FK_classificacao_contatosSite foreign key (idClassificacao) 
    references tblClassificacao (idClassificacao)
);

SELECT tblContatosSite.*, tblClassificacao.nomeClassificacao FROM tblContatosSite, tblClassificacao WHERE tblContatosSite.idClassificacao = tblClassificacao.idClassificacao AND tblContatosSite.idContatoSite = 5;
SELECT tblContatosSite.* from tblContatosSite;

# ----------------- ADMINISTRAÇÃO DE USUÁRIOS -----------------
create table tblPermissao (
	idPermissao int auto_increment not null  primary key,
    nomePermissao varchar(50) not null,
    faleConosco boolean not null,
    admUsuario  boolean not null,
    admConteudo boolean not null,
    admProduto boolean not null
);

alter table tblpermissao
	add column ativado boolean not null;
            
select * from tblPermissao;
drop table tblPermissao;

create table tblUsuario (
	idUsuario int auto_increment not null  primary key,
    nomeUsuario varchar(50) not null,
    usuario varchar(50) not null,
    senha varchar(50) not null,
    email varchar(100) not null,
    celular varchar(15) not null,
    idPermissao int not null,
    constraint FK_permissao_usuario foreign key (idPermissao)
    references tblPermissao (idPermissao)
);

alter table tblUsuario
	add ativado boolean not null;
UPDATE tblUsuario set ativado = true WHERE idUsuario = 24;
insert into tblUsuario
            (nomeUsuario, usuario, senha, email, celular, idPermissao)
            values 
            ('Gabriel', 'Gamiel', '654321', 'e-jorge2010@hotmail.com', '(11) 982654744', 1);
            
select * from tblUsuario;
drop table tblUsuario;
# ----------------- ADMINISTRAÇÃO DE CONTEÚDO -----------------

# -=-=-=-= Nossas Lojas =-=-=-=-
create table tblNossasLoja (
	idNossasLoja int auto_increment not null  primary key,
    tituloNossasLoja varchar(50),
    imagemNossasLoja varchar(200)
);
SELECT tblNossasLoja.*
                    FROM tblNossasLoja
                    WHERE tblNossasLoja.ativado = 1;

create table tblEndereco (
	idEndereco int auto_increment not null  primary key,
    rua varchar(100),
    numero varchar(10),
    bairro varchar(100),
    celular varchar(15),
    idNossasLoja int not null,
    constraint FK_nossasLoja_endereco foreign key (idNossasLoja)
    references tblNossasLoja (idNossasLoja)
);
UPDATE tblEndereco set cep = '06634-020', rua = 'Rua Jorge', bairro = 'Jd. São João', numero = '101', celular = '(11) 96368-8640', idNossasLojas = 3 WHERE tblEndereco.idEndereco = 4;
select * from tblEndereco;
select * from tblNossasLoja;

alter table tblEndereco add cep varchar(9);
alter table tblEndereco add ativado boolean;
alter table tblNossasLoja add ativado boolean;

# -=-=-=-= Sobre a empresa =-=-=-=-
create table tblOrigemEmpresa (
	idOrigemEmpresa int auto_increment not null  primary key,
    tituloOrigemEmpresa varchar(50),
    conteudoOrigemEmpresa text,
    imagemOrigemEmpresa varchar(200)
);

create table tblSobreEmpresa (
	idEndereco int auto_increment not null  primary key,
    tituloSobreEmpresa varchar(50),
    conteudoSobreEmpresa text
);

# -=-=-=-= Curiosidades =-=-=-=-
create table tblOrigemHamburguer (
	idOrigemHamburguer int auto_increment not null  primary key,
    tituloOrigemHamburguer varchar(50),
    conteudoOrigemHamburguer text,
    imagemOrigemHamburguer varchar(200)
);

create table tblMontagem (
	idMontagem int auto_increment not null  primary key,
    tituloMontagem varchar(50),
    conteudoMontagem text,
    imagemMontagem varchar(200)
);

# ----------------- TESTES DE CÓDIGOS -----------------
insert into tblContatosSite
            (nome, telefone, celular, email, profissao, sexo, homepage, link, mensagem, idClassificacao)
            values 
            ('Jorge', '1234-1234', '1234-4321', 'e-jorge2010@hotmail.com', 'programador', 'm', '', '', 'ERROOOO', 1);

select * from tblClassificacao;

insert into tblClassificacao (nomeClassificacao) values ('Critica');
insert into tblClassificacao (nomeClassificacao) values ('Sugestao');

drop table tblContatosSite;

desc tblContatosSite;

select tblContatosSite.idContatoSite, tblContatosSite.nome, tblContatosSite.profissao, tblContatosSite.classificacao, tblContatosSite.celular  from tblContatosSite;

ALTER USER 'root'@'localhost' IDENTIFIED WITH mysql_native_password BY "";

SELECT tblContatosSite.nome, tblContatosSite.profissao, tblContatosSite.celular, tblContatosSite.idClassificacao, tblContatosSite.idContatoSite, tblClassificacao.nomeClassificacao FROM tblContatosSite, tblClassificacao WHERE tblContatosSite.idClassificacao = tblClassificacao.idClassificacao AND tblContatosSite.idClassificacao = 1;

