drop table agenda;
create table agenda(
apellido varchar2(30),
nombre VARCHAR2(20),
domicilio VARCHAR2(30),
telefono VARCHAR2(11)
);


insert into agenda values ('Alvarez', 'Alberto','colon 123','4234567');
insert into agenda values ('Juarez', 'Juan','Avellanada 135','4458787');
insert into agenda values ('Lopez', 'Maria','Urquiza 333','4545454');
insert into agenda values ('Lopez', 'Jose','Urquiza 333','4545454');
insert into agenda values ('Salas', 'Susana','Gral. Paz 1234','4123456');

select* from agenda;

delete from agenda where nombre='Juan';

select* from agenda;

delete from agenda where telefono = 4545454;

select* from agenda;

delete from agenda;--contiene 2 registros y al eliminar se verifica los campos vacios sin datos en ellas
