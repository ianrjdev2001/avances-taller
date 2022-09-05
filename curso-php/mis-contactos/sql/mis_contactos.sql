create database mis_contactos;

use mis_contactos;

create table contactos(email varchar(50) not null, nombre varchar(50) not null, sexo char(1), nacimiento date,telefono varchar(13),pais varchar(13) not null, imagen varchar(50),primary key(email),
fulltext key buscador(email,nombre,sexo,telefono,pais))engine = myisam default charset = latin1;

create table pais(id_pais int not null auto_increment, pais varchar(50) not null, primary key (id_pais))engine = myisam default charset = latin1;

insert into pais (id_pais,pais) values (1,"Mexico "); 