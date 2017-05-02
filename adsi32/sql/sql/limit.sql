-- Mostrara los 3 primeros de la tabla
select * from NombreTabla limit 3;
--Mostrara los 2 despues de la condicion offset
select * from NombreTabla limit 2 limit 3;
--Buscar registros con Like 
select * from clientes where nombres like "%Rober%";
--Buscar al inicio
select * from clientes where direcion like "cra%";
--buscar al final
 select * from clientes where direcion like "%6a";
 --Buscar -- completando caracteres
 select * from nombretabla where nombrecampo like 'R_b_r_o';
 --Buscar (Negacion) * completando caracteres;
SELECT * FROM clientes WHERE nombres NOT LIKE 'R_ber_o';
 --Buscar por in
  select * from clientes where id in (1,5);
  --Entre un valor iniciar - final (between)
  select * from clientes where id between 3 and 5;
  --(Negacion) Entre un valor inicial - final
   select * from clientes where id not between 3 and 5; 
  -- union tablas
  select documento, nombres from clientes union select id , nombre from articulos;

  --Backup insertar una tabla nueva en la tabla vieja
  create table copia_articulos(
    -> id int auto_increment,
    -> nombre varchar(24) not null,
    -> precio int not null,
    -> primary key(id));
  ---- 
    -> primary key(id));insert into copia_articulos select * from articulos;
-- backup Base datos nueva tabla , buscar vieja base de datos mas tabla

insert into copia_basedatos.copia_tabla
	select*from basedatos.tabla
