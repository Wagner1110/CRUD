SELECT * FROM crud.productos;
use CRUD;
create table usuarios(id int(10) auto_increment primary key,
correo varchar(35),
pass varchar(25));
select * from usuarios;
insert into usuarios(correo,pass) value("josecaal@gmail.com","123456");
select * from usuarios;