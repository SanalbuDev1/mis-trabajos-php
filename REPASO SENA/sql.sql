-- crear base de datos

create database nombrebasededatos;

-- crear tabla base de datos

create table nombretabla(
->id int auto_increment,
->nombre varchar(40) not null,
->telefono bigint null,
->primary key(id));
)

--Selecionar de forma decendente la informaion

select * from nombretabla
->order by id DESC;

--Selecionar de forma decendente con alias

select telefono as t , nombre as n , id as ide from nombretabla
->order by ide DESC;

-- Mostrar cierto numero de columnas

select * from nombretabla limit numerodecolumnas;

-- Mostrar un rango con between

select * from tabla1 where id between numeromenor and numeromayor;

-- Mostrar algo por medio de like

select * from nombretabla where nombrecolumna like 'contenido';

-- Mostrar por medio de un substring de like

select * from nombretabla where nombrecolumna like '%contenido%';

-- Operador in sirve para mostrar campos

select * from nombretabla where nombrecolumna in(campo1,campo2...);

--Consultas multiples

select * from tabla1 where id between 1 and 2 or nombre like "%c%";

select * from tabla where nombre in("");

-- agregar una columna nueva o varias

alter table nombretabla add precio int not null,
add correo varchar(40) not null;

--eliminar columnas

alter table nombretabla
->drop column nombrecolumna;

-- modificar una columna
alter table nombretabla
->alter column nombrecolumna varchar(100);

--crear tablas con referencia

alter table nombretabla add foreing key(id) references nombretabla2(id);



