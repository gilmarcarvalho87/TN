create database tech_need_db;

use tech_need_db;

create table usuarios_autenticados(
	id int not null primary key AUTO_INCREMENT,
	nome varchar(100) not null,
	email varchar(150) not null,
	senha varchar(32) not null,
	ativo BIT(1) NOT NULL DEFAULT b'1'
);