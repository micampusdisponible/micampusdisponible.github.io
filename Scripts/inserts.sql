5
insert into area(nombre) values ('Estudio');
insert into area(nombre) values ('Alimentacion');
insert into area(nombre) values ('Estacionamiento');
insert into area(nombre) values ('Residencias');

select * from area;

insert into lugar(nombre, area, capacidad) values ('Cetec 1er Piso', 1, 50); 	--compu 1                               	id 1
insert into lugar(nombre, area, capacidad) values ('Biblioteca 4to Piso', 1, 200);	--compu 2								id 2
insert into lugar(nombre, area, capacidad) values ('CIAP 213', 1, 50);	--compu 3											id 3
insert into lugar(nombre, area, capacidad) values ('Salas Biblioteca 3er Piso', 1, 10); --pushbutton 2						id 4
insert into lugar(nombre, area, capacidad) values ('Biblioteca 4to Piso', 1, 200);										--  id 5
insert into lugar(nombre, area, capacidad) values ('Estadio Planta Baja', 3, 100);					--pushbutton 3			id 6
insert into lugar(nombre, area, capacidad) values ('Estadio Segunda Planta', 3, 100);									--	id 7
insert into lugar(nombre, area, capacidad) values ('Estadio Tercera Planta', 3, 100);									--  id 8


select * from lugar;

insert into individuales(lugar, estacion, estado) values (1, 1, 0);	--'Cetec 1er Piso'
insert into individuales(lugar, estacion, estado) values (1, 2, 0);	--'Cetec 1er Piso'
insert into individuales(lugar, estacion, estado) values (1, 3, 0);	--'Cetec 1er Piso'
insert into individuales(lugar, estacion, estado) values (4, 4, 0);	--'Salas Biblioteca 3er Piso'

select * from individuales;

insert into grupales(lugar, ocupacion) values (5, 100);
insert into grupales(lugar, ocupacion) values (6, 60);
insert into grupales(lugar, ocupacion) values (7, 20);
insert into grupales(lugar, ocupacion) values (8, 10);

select * from grupales;
