drop database if exists liga_futbol;
create database liga_futbol;
use liga_futbol;
create table equipos(
	Nombre varchar(50),
	Departamento varchar(50),
	Estadio varchar(50),
	Direccion varchar(50),
	primary key(Nombre)
);

create table partidos(
	IdPartido int AUTO_INCREMENT not null,
	Local varchar(50),
	GolesLocal int(50),
	Visitante varchar(50),
	GolesVisitante int(50),
	Ganador varchar(50),
	primary key(IdPartido)
);

UPDATE `partidos` SET Ganador=Local WHERE GolesLocal>GolesVisitante;
UPDATE `partidos` SET Ganador=Visitante WHERE GolesVisitante>GolesLocal;
UPDATE `partidos` SET Ganador='Ninguno' WHERE GolesVisitante=GolesLocal;

create table posiciones(
	Equipo varchar(50),
	PJ int(50),
	PG int(50),
	PE int(50),
	PP int(50),
	GF int(50),
	GC int(50),
	PTS int(50),
	primary key(Equipo)
);