create database dbcontatos2020;

show databases;
use dbcontatos2020;

ALTER USER 'root'@'localhost' IDENTIFIED WITH mysql_native_password
BY 'bcd127';

create table tblgeneros(
	idgeneros int not null auto_increment primary key,
	genero varchar(20) not null, 
    sigla varchar (1) not null
);
insert into tblgeneros (genero, sigla)
values ('Outro', 'O');

create table tblfaleconosco(
	idFaleconosco int not null auto_increment primary key,
    nome varchar(80) not null,
    celular varchar(15) not null,
    email varchar(40) not null,
    homepage varchar(150),
    profissao varchar(50) not null,
    idgeneros int(8) not null,
    mensagem text not null,
    constraint Fk_faleconosco_genero
    foreign key(idgeneros)
    references tblgeneros(idgeneros)
);

select tbluser.*, tblgeneros.genero from tbluser, tblgeneros 
                where tblgeneros.idgeneros = tbluser.idgeneros and tbluser.idUser;

#insert into tblcontatos (nome, celular, email, homepage, profissao, sexo, tipomensagem, mensagem)
insert into tblfaleconosco (nome, celular, email, homepage, profissao, idgeneros, mensagem)
values ('Julia2', '(11)98765-4321', 'testando@testando.com', 'A firma', 'tecnico', 2, 'asdfg');

show tables;

create table tbluser(
	idUser int not null auto_increment primary key,
    nome varchar(50) not null,
    nomeUser varchar (50) not null,
    senha varchar(40) not null,
    email varchar(80) not null,
    cpf varchar(14) not null,
    celular varchar(14) not null,
    idgeneros int(8) not null,
    statusUser varchar(1) not null,
    constraint Fk_user_genero
    foreign key(idgeneros)
    references tblgeneros(idgeneros)
);

create table tblcategoria(
	idCategoria int not null auto_increment primary key,
    nome varchar(40) not null,
    statusCategoria varchar(1)
);
create table tblsubcategoria(
	idSubcategoria int not null auto_increment primary key,
    nomesub varchar(40) not null,
    statusSubcategoria varchar(1),
    idCategoria int(20) not null,
    constraint Fk_categoira_subcategoria
    foreign key(idCategoria)
    references tblcategoria(idCategoria)
);

drop table tblsubcategoria;

select tblsubcategoria.idSubcategoria, tblsubcategoria.nomesub, 
tblsubcategoria.statusSubcategoria, tblsubcategoria.idCategoria 
from tblsubcategoria order by tblsubcategoria.idSubcategoria desc;

select tblsubcategoria.idSubcategoria, tblsubcategoria.nomesub, 
tblsubcategoria.statusSubcategoria, tblsubcategoria.idCategoria, tblcategoria.nome 
from tblsubcategoria order by tblsubcategoria.idSubcategoria desc;

select * from tblsubcategoria;

select tblcategoria.idCategoria, tblcategoria.nome, tblcategoria.statusCategoria from tblcategoria order by tblcategoria.idCategoria desc;

desc tblsubcategoria;

alter table tblcategoria
add column statusCaegoria varchar(1) not null;

insert into tbluser (nome, nomeUser, senha, email, cpf, celular, idgeneros)
values ('Lucas', 'Luke', '12345678', 'teste@teste.com', '388.888.888-88', '(11)99999-4545', 2);

select * from tblfaleconosco;

drop table tbluser;

/* 	drop table tblfaleconosco; 
	"drop" exclui algum arquivo que voce desejar */
show tables;
desc tbluser;

select * from tbluser;

/* select tblfaleconosco.idFaleconosco, tblfaleconosco.nome, tblfaleconosco.celular, tblfaleconosco.email, tblfaleconosco.homepage, 
tblfaleconosco.profissao, tblfaleconosco.idgeneros, tblfaleconosco.mensagem
from tblfaleconosco order by idFaleconosco desc; */ 

select * from tblgeneros
where idgeneros;
