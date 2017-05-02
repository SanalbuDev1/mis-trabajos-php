#Selecionar todos los registros
select * from nombretabla;
#Selecionar una columna de la tabla
select nombrecolumna from nombretablas
#Selecionar mas de una columna de la tabla
select nombre1,nombre from 
#Selecionar valores distintos(unicos)
select distinct nombrecampo from nombretabla;
#selecionar where
select * from clientes where variable=valor
#selecionar varios
select * from clientes where id in (1,2);
#selecionar valores mayores o menores
select * from clientes where id>3;
#selecionar todos menos un regitro determinado
select * from clientes where id<>3;
#selecionar varios registros con or;
select * from clientes where id=2 or id=4;
#selecionar varios registros con and;
select * from clientes where id=1 and documento=75000001;
#and / or
select * from clientes where id=1 and documento=75000001 or id = 2;
insert into clientes values(default,'1060655854','Santiago','8774919','villamaria');