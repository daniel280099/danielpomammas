drop table libros
create table libros(
codigo number(5) not null,
titulo varchar2(40) not null,
autor varchar2(20)DEFAULT 'Desconocido',
editorial VARCHAR2(20),
edicion date,
precio number(5,2)


)


insert into libros values(1, 'PHP','PEPE','CASTILLO','18/05/2001',100);
insert into libros values(2, 'JAVA','JUAN','CASTILLO','01/05/2002',150);
insert into libros values(3, 'SQL','PEDRO','CASTILLO','18/08/2003',110);
insert into libros values(4, 'ORACLE','PABLO','CASTILLO','18/04/2004',190);



SELECT * FROM LIBROS;
SELECT * FROM LIBROS WHERE PRECIO >=100 AND PRECIO <=150;
SELECT * FROM LIBROS WHERE PRECIO BETWEEN 100 AND 150;

SELECT * FROM LIBROS WHERE EDICION BETWEEN '01/01/2001' AND '31/12/2002';






-------------------------------------------------------------------------------------------------------------------------
-------------------------------------------------------------------------------------------------------------------------
-------------------------------------------------------------------------------------------------------------------------
-------------------------------------------------------------------------------------------------------------------------
-------------------------------------------------------------------------------------------------------------------------
-------------------------------------------------------------------------------------------------------------------------
-------------------------------------------------------------------------------------------------------------------------
-------------------------------------------------------------------------------------------------------------------------
-------------------------------------------------------------------------------------------------------------------------
-------------------------------------------------------------------------------------------------------------------------
-------------------------------------------------------------------------------------------------------------------------
-------------------------------------------------------------------------------------------------------------------------

DROP TABLE visitas;

create table visitas(
nombre varchar2(30) DEFAULT 'Anonimo',
mail varchar2(50),
pais varchar(20),
fecha date

)


insert into visitas values('Ana Maria Lopez','AnaMaria@hotmail.com','Argentina','10/10/2016');

insert into visitas values('Gustavo Gonzales','GustavoGGonzales@gotmail.com','Chile','10/10/2016');

insert into visitas values('Juancito','JuanJosePerz@hotmail.com','Argentina','11/10/2016');

insert into visitas values('Fabiola Martinez','MartinezFabiola@hotmail.com','Mexico','12/10/2016');
insert into visitas values('Fabiola Martinez','MartinezFabiola@hotmail.com','Mexico','12/09/2016');


insert into visitas values('Juancito','JuanJosePerez@hotmail.com','Argentina','12/09/2016');
insert into visitas values('Juancito','JuanJosePerez@hotmail.com','Argentina','15/09/2016');


insert into visitas values('Federico1','federicogarcia@xaxamail.com','Argentina',null);

select *from visitas; 


select nombre, fecha from visitas where fecha between '12/09/2016' and '11/10/2016';


------------------------------------------------------------------------------------
-----------------------------------------------------------------------------------
drop table medicamentos;


create table medicamentos(
codigo number(4) not null,
nombre varchar2(20),
laboratorio varchar2(20),
precio number(6,2),
cantidad number(4),
fechaVencimiento date not null,
primary key(codigo)
);

insert into medicamentos values(102,'Sertal','Roche',5.2,10,'01/02/2020');
insert into medicamentos values(120,'Buscapina','Roche',4.10,200,'01/12/2017');
insert into medicamentos values(230,'Amoxidal 500','Bayer',15.6,100,'28/12/2017');
insert into medicamentos values(250,'paracetamol 500','Bago',1.90,20,'01/02/2018');
insert into medicamentos values(350,'Bayaspirina','Bayer',2.10,150,'01/02/2019');
insert into medicamentos values(456,'Amoxidal jarabe','Bayer',5.10,250,'01/02/2020');
select * from medicamentos;

select nombre, precio from  medicamentos where  precio between 5 and 15;

select cantidad from medicamentos where cantidad between 100 and 200; 

select nombre, fechaVencimiento from medicamentos where fechaVencimiento  between current_date and '01/01/2028'; 
delete from medicamentos where fechaVencimiento between '01/01/2017' and '31/12/2018'; 



--------------------------------------------------------------------------
--------------------------------------------------------------------------
--------------------------------------------------------------------------
--1
drop table medicamentos;

--2
create table medicamentos(
codigo number(5),
nombre varchar2(20),
laboratorio varchar2(20),
precio number(6,2),
cantidad number(3) not null,
fechaVencimiento date not null,
primary key(codigo)
);

--3
insert into medicamentos values(102,'Sertal','Roche',5.2,10,'01/02/2020');
insert into medicamentos values(120,'Buscapina','Roche',4.10,200,'01/12/2017');
insert into medicamentos values(230,'Amoxidal 500','Bayer',15.6,100,'28/12/2017');
insert into medicamentos values(250,'paracetamol 500','Bago',1.90,20,'01/02/2018');
insert into medicamentos values(350,'Bayaspirina','Bayer',2.10,150,'01/02/2019');
insert into medicamentos values(456,'Amoxidal jarabe','Bayer',5.10,250,'01/02/2020');

select * from medicamentos;
--4recuperar nombre de dichop medicamentos cuyo laboratoio sea 'Bayer' o 'Bago'
select nombre, laboratorio as asignado from medicamentos where laboratorio in ('Bayer' ,'Bago');
select nombre , precio as "precios asignados" from medicamentos where laboratorio not in ('Bayer' ,'Bago');
--5
select *from medicamentos  where cantidad between 1 and 5;
select *from medicamentos where cantidad in (1,2,3,4,5);
