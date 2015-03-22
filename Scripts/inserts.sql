
insert into area(nombre) values ('Estudio');
insert into area(nombre) values ('Alimentacion');
insert into area(nombre) values ('Estacionamiento');
insert into area(nombre) values ('Lavanderia');

select * from area;

insert into lugar(nombre, area, capacidad) values ('Cetec 1er Piso', 1, 50);
insert into lugar(nombre, area, capacidad) values ('Biblioteca 4t0 Piso', 1, 200);
insert into lugar(nombre, area, capacidad) values ('El Borrego', 2, 40);
insert into lugar(nombre, area, capacidad) values ('Centrales', 2, 200);
insert into lugar(nombre, area, capacidad) values ('Estadio', 3, 100);
insert into lugar(nombre, area, capacidad) values ('Salas Biblioteca 3er Piso', 1, 10);

select * from lugar;

insert into individuales(lugar, estacion, estado) values (1, 1, 0);
insert into individuales(lugar, estacion, estado) values (1, 2, 0);
insert into individuales(lugar, estacion, estado) values (1, 3, 0);
insert into individuales(lugar, estacion, estado) values (6, 1, 0);
insert into individuales(lugar, estacion, estado) values (6, 2, 0);
insert into individuales(lugar, estacion, estado) values (6, 3, 0);

select * from individuales;

insert into grupales(lugar, ocupacion) values (2, 100);
insert into grupales(lugar, ocupacion) values (3, 10);

select * from grupales;
