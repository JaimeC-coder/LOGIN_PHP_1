drop database if exists secciones;
create database secciones;
use secciones;
create table secciones(
    id int not null auto_increment,
    nombre varchar(250) not null,
    username varchar(250) not null,
    password varchar(250) not null,
    primary key(id)
);